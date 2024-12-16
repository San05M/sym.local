<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AsociadoController extends AbstractController
{
    #[Route('/asociado', name: 'app_asociado')]
    public function index(): Response
    {
        return $this->render('asociado/index.html.twig', [
            'controller_name' => 'AsociadoController',
        ]);
    }
}
