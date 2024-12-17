<?php

namespace App\Controller;

use App\Entity\Asociados;
use App\Form\AsociadosType;
use App\Repository\AsociadosRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/asociados')]
final class AsociadosController extends AbstractController
{
    #[Route(name: 'app_asociados_index', methods: ['GET'])]
    public function index(AsociadosRepository $asociadosRepository): Response
    {
        return $this->render('asociados/index.html.twig', [
            'asociados' => $asociadosRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_asociados_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $asociado = new Asociados();
        $form = $this->createForm(AsociadosType::class, $asociado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($asociado);
            $entityManager->flush();

            return $this->redirectToRoute('app_asociados_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('asociados/new.html.twig', [
            'asociado' => $asociado,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_asociados_show', methods: ['GET'])]
    public function show(Asociados $asociado): Response
    {
        return $this->render('asociados/show.html.twig', [
            'asociado' => $asociado,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_asociados_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Asociados $asociado, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AsociadosType::class, $asociado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_asociados_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('asociados/edit.html.twig', [
            'asociado' => $asociado,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_asociados_delete', methods: ['POST'])]
    public function delete(Request $request, Asociados $asociado, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$asociado->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($asociado);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_asociados_index', [], Response::HTTP_SEE_OTHER);
    }
}
