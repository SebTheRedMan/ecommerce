<?php

namespace App\Controller\Admin;

use App\Entity\Users;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/utilisateurs', name: 'admin_users_')]
class UsersController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(UsersRepository $users): Response
    {
        $users = $users->findBy([], ['firstname' => 'asc']);
        return $this->render('admin/users/index.html.twig', compact('users'));
    }

    #[Route('/edition', name: 'edit')]
    public function edit(UsersRepository $users): Response
    {
        $users = $users->findBy([], ['firstname' => 'asc']);
        return $this->render('admin/users/index.html.twig', compact('users'));
    }

    #[Route('/edition/verification/{id}', name: 'edit_verif', methods: ['POST'])]
    public function changeVerif(
        Users $user,
        Request $request,
        EntityManagerInterface $manager,
    ): JsonResponse
    {
        // on récupère 
        $data = json_decode($request->getContent(), true);

        if ($this->isCsrfTokenValid('post' . $user->getId(), $data['_token'])) {
            
            $user->setIsVerified(!$user->getIsVerified());
            $manager->persist($user);
            $manager->flush();
            return new JsonResponse(['success' => true], 200);
        }
        
        return new JsonResponse(['error' => 'Token invalide'], 400);
    }
}
