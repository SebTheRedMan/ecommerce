<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\RegistrationFormType;
use App\Repository\UsersRepository;
use App\Security\UsersAuthenticator;
use App\Service\JWTService;
use App\Service\SendMailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class RegistrationController extends AbstractController
{
    #[Route('/inscription', name: 'app_register')]
    public function register(
        Request $request, 
        UserPasswordHasherInterface $userPasswordHasher, 
        UserAuthenticatorInterface $userAuthenticator, 
        UsersAuthenticator $authenticator, 
        EntityManagerInterface $entityManager,
        SendMailService $mail,
        JWTService $jwt
    ): Response
    {
        $user = new Users();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            // on génère le JWT
            // on crée le header
            $header = [
                'alg' => 'HS256',
                'typ' => 'JWT'
            ];
            // on crée le payload
            $payload = [
                'user_id' => $user->getId()
            ];

            // on génère le token
            $token = $jwt->generate($header, $payload, $this->getParameter('app.jwtsecret'));

            // dd($token);

            // do anything else you need here, like send an email
            $mail->send(
                'no-reply@monsite.net', 
                $user->getEmail(), 
                'Activation de votre compte sur le site ecommerce', 
                'register', 
                compact('user', 'token')
            );

            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/verif/{token}', name: 'verify_user')]
    public function verifyUser(
        string $token, 
        JWTService $jwt, 
        UsersRepository $usersRepository,
        EntityManagerInterface $em
    ) : Response
    {
        // on vérifie si le token est valide , n'a pas été corrompu
        
        if ($jwt->isValid($token) && !$jwt->isExpired($token) && $jwt->check($token, $this->getParameter('app.jwtsecret'))) {
            // on récupère le payload
            $payload = $jwt->getPayload($token);

            // on récupère le user du token
            $user = $usersRepository->find($payload['user_id']);

            // on regarde si le user existe et qu'il n'a pas encore était vérifié
            if ($user && !$user->getIsVerified()) {
                $user->setIsVerified(true);
                $em->flush($user);
                $this->addFlash('success', 'Le compte est vérifié maintenant');
                return $this->redirectToRoute('profile_index');
            }
        }

        // ici le token est corrompu
        $this->addFlash('danger', 'Le token est invalide ou a expiré');
        return $this->redirectToRoute('app_login');
    }

    #[Route('/renvoiverif', name: 'resend_verif')]
    public function resendVerif (
        JWTService $jwt, 
        SendMailService $mail, 
        UsersRepository $usersRepository
    ): Response
    {
        $user = $this->getUser();
        if (!$user){
            $this->addFlash('danger', 'Vous devez être connecté');
            return $this->redirectToRoute('app_login');
        }

        if ($user->getIsVerified()) {
            $this->addFlash('warning', 'Votre compte est déjà vérifié');
            return $this->redirectToRoute('profile_index');
        }

        // on crée le header
        $header = [
            'alg' => 'HS256',
            'typ' => 'JWT'
        ];
        // on crée le payload
        $payload = [
            'user_id' => $user->getId()
        ];

        // on génère le token
        $token = $jwt->generate($header, $payload, $this->getParameter('app.jwtsecret'));

        // dd($token);

        // do anything else you need here, like send an email
        $mail->send(
            'no-reply@monsite.net', 
            $user->getEmail(), 
            'Activation de votre compte sur le site ecommerce', 
            'register', 
            compact('user', 'token')
        );

        $this->addFlash('success', 'Email de vérification renvoie');
        return $this->redirectToRoute('profile_index');
    }
}
