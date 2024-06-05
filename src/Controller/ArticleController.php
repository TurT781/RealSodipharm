<?php
// fichier ArticleController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ArticleRepository;
use App\Entity\Article;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController extends AbstractController
{
    public function etagere(ArticleRepository $articleRepository): Response
    {
        $articles = $articleRepository->findAll();

        return $this->render('etagereArticle.html.twig', [
            'articles' => $articles,
        ]);
    }
    #[Route('/articles/update-positions', name: 'update_article_positions', methods: ['POST'])]
    public function updatePositions(Request $request): Response
    {
        // Récupérer les données JSON envoyées dans la requête
        $data = json_decode($request->getContent(), true);

        return new Response('Positions updated', Response::HTTP_OK);
    }

    public function sort($id, $position, ArticleRepository $articleRepository): Response
    {
        $em = $this->getDoctrine()->getManager();
        $article = $articleRepository->find($id);
        $article->setPosition($position);
        $em->persist($article);
        $em->flush();

        $articles = $articleRepository->findAll();

        return $this->render('etagereArticle.html.twig', [
            'articles' => $articles,
        ]);
    }
}
