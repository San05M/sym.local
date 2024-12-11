<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Imagen;


class ImagenController extends AbstractController
{
    #[Route('/imagen', name: 'app_imagen')]
    public function index(ManagerRegistry $doctrine): Response
    {
    $imagenes = $doctrine->getRepository(Imagen::class)->findAll();
    return $this->render('imagen/index.html.twig', [
    'imagenes' => $imagenes
    ]);
    }

    // public function index(): Response
    // {
    //     return $this->render('imagen/index.html.twig', [
    //         'controller_name' => 'ImagenController',
    //     ]);
    // }

}
