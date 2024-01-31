<?php

namespace App\Controller;

use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function main(CategoriesRepository $categoriesRepository): Response
    {
        return $this->render('index/index.html.twig', [
            'categories' => $categoriesRepository->findBy([], ['categoryOrder' => 'asc']),
        ]);
    }
}
