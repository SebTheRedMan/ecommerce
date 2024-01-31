<?php

namespace App\Controller\Admin;

use App\Entity\Images;
use App\Entity\Products;
use App\Form\ProductsFormType;
use App\Repository\ProductsRepository;
use App\Service\PictureService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/produits', name: 'admin_products_')]
class ProductsController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ProductsRepository $products): Response
    {
        $products = $products->findAll();
        return $this->render('admin/products/index.html.twig', compact('products'));
    }

    #[Route('/ajout', name: 'add')]
    public function add(
        Request $request, 
        EntityManagerInterface $manager, 
        SluggerInterface $slugger,
        PictureService $pictureService
    ): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        
        $product = new Products();

        $productForm = $this->createForm(ProductsFormType::class, $product);

        $productForm->handleRequest($request);

        if ($productForm->isSubmitted() && $productForm->isValid()) {
            // on gère les images
            $images = $productForm->get('images')->getData();
            foreach ($images as $image) {
                // on définit le dossier de destination
                $folder = 'products';

                // on appelle le service d'ajout
                $file = $pictureService->add($image, $folder, 300, 300);

                $img = new Images();
                $img->setName($file);
                $product->addImage($img);
            }

            $product->setSlug($slugger->slug($product->getName()));

            // Plus nécessaire avec les déclarations de contrainte cf: ProductFormType
            // $product->setPrice($product->getPrice() * 100);

            $manager->persist($product);
            $manager->flush();

            $this->addFlash('success', 'Le produit a bien été ajouté');
            return $this->redirectToRoute('admin_products_edit', ['id' => $product->getId()]);
        }

        return $this->render('admin/products/add.html.twig', compact('productForm'));
    }

    #[Route('/edition/{id}', name: 'edit')]
    public function edit(
        Products $product,
        Request $request, 
        EntityManagerInterface $manager, 
        SluggerInterface $slugger,
        PictureService $pictureService
    ): Response
    {
        // on vérifie si le user peut éditer avec le Voter
        $this->denyAccessUnlessGranted('PRODUCT_EDIT', $product);

        // Plus nécessaire avec les déclarations de contrainte cf: ProductFormType
        // $product->setPrice($product->getPrice() / 100);

        $productForm = $this->createForm(ProductsFormType::class, $product);

        $productForm->handleRequest($request);

        if ($productForm->isSubmitted() && $productForm->isValid()) {
            // on gère les images
            $images = $productForm->get('images')->getData();
            foreach ($images as $image) {
                // on définit le dossier de destination
                $folder = 'products';

                // on appelle le service d'ajout
                $file = $pictureService->add($image, $folder, 300, 300);

                $img = new Images();
                $img->setName($file);
                $product->addImage($img);
            }

            $product->setSlug($slugger->slug($product->getName())->lower());

            // Plus nécessaire avec les déclarations de contrainte cf: ProductFormType
            // $product->setPrice($product->getPrice() * 100);

            $manager->persist($product);
            $manager->flush();

            $this->addFlash('success', 'Le produit a bien été enregistré');
            return $this->redirectToRoute('admin_products_edit', ['id' => $product->getId()]);
        }

        return $this->render('admin/products/edit.html.twig', compact('productForm', 'product'));
    }

    #[Route('/suppression/{id}', name: 'delete')]
    public function delete(Products $product): Response
    {
        // on vérifie si le user peut éditer avec le Voter
        $this->denyAccessUnlessGranted('PRODUCT_DELETE', $product);

        return $this->render('admin/products/index.html.twig', [
            'controller_name' => 'UsersController',
        ]);
    }

    #[Route('/suppression/image/{id}', name: 'delete_image', methods: ['DELETE'])]
    public function deleteImage(
        Images $image,
        Request $request,
        EntityManagerInterface $manager,
        PictureService $pictureService
    ): JsonResponse
    {
        // on récupère 
        $data = json_decode($request->getContent(), true);

        if ($this->isCsrfTokenValid('delete' . $image->getId(), $data['_token'])) {
            // le token est valide
            // on récupère le nom de l'image
            $name = $image->getName();

            if ($pictureService->delete($name, 'products', 300, 300)) {
                $manager->remove($image);
                $manager->flush();
                return new JsonResponse(['success' => true], 200);
            }

            // la suppression a échouée
            return new JsonResponse(['error' => 'Erreur de suppression'], 400);
        }
        
        return new JsonResponse(['error' => 'Token invalide'], 400);
    }

}
