<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DescenteController extends AbstractController
{
    #[Route('/descente', name: 'app_descente')]
    public function index(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAll();

        return $this->render('descente/index.html.twig', [
            'controller_name' => 'DescenteController',
            'articles' => $articles
        ]);
    }
}
