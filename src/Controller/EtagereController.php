<?php

namespace App\Controller;

use App\Entity\Etagere;
use App\Form\EtagereType;
use App\Repository\EtagereRepository;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

// #[Route('/etagere')]
class EtagereController extends AbstractController
{
    #[Route('/', name: 'app_etagere_index', methods: ['GET'])]
    public function index(EtagereRepository $etagereRepository): Response
    {
        return $this->render('etagere/index.html.twig', [
            'etageres' => $etagereRepository->findAll(),
        ]);
    }

    #[Route('/descente', name: 'app_descente', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $etagere = new Etagere();
        $form = $this->createForm(EtagereType::class, $etagere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($etagere);
            $entityManager->flush();
            $hauteur = 200;
            $largeur = 1000;
            // $eHauteur = $entityManager->getRepository(Etagere::class)->getHauteur($hauteur);
           
            return $this->render('descente/index.html.twig', [
                'etagere' => $etagere,
                'form' => $form,
                'hauteur' => $hauteur,
                'largeur' => $largeur,
            ]);
        }

        return $this->render('descente/index.html.twig', [
            'etagere' => $etagere,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_etagere_show', methods: ['GET'])]
    public function show(Etagere $etagere): Response
    {
        return $this->render('etagere/show.html.twig', [
            'etagere' => $etagere,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_etagere_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Etagere $etagere, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EtagereType::class, $etagere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_etagere_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('etagere/edit.html.twig', [
            'etagere' => $etagere,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_etagere_delete', methods: ['POST'])]
    public function delete(Request $request, Etagere $etagere, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$etagere->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($etagere);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_etagere_index', [], Response::HTTP_SEE_OTHER);
    }
}
