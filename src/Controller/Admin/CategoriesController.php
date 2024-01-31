<?php

namespace App\Controller\Admin;

use App\Entity\Categories;
use App\Form\CategoriesFormType;
use App\Repository\CategoriesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin/categories', name: 'admin_categories_')]
class CategoriesController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(CategoriesRepository $categoriesRepository) : Response 
    {
        $categories = $categoriesRepository->findBy([], ['categoryOrder' => 'asc']);
        return $this->render('admin/categories/index.html.twig', compact('categories'));
    }

    #[Route('/ajout/', name: 'add')]
    public function add(
        Request $request, 
        EntityManagerInterface $manger,
        SluggerInterface $slugger
    ) : Response 
    {
        $cat = new Categories();
        $form = $this->createForm(CategoriesFormType::class, $cat);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $cat->setSlug($slugger->slug($cat->getName())->lower());
            $manger->persist($cat);
            $manger->flush();

            $this->addFlash('success', 'La catégorie a été ajoutée avec succès');
            return $this->redirectToRoute('admin_categories_index');
        }

        return $this->render('admin/categories/add.html.twig', ['catForm' => $form->createView()]);
    }
}