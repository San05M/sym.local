<?php

namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'sym_index')]

    public function index()
    {
        $nombre = 'María';
        $saludo = 'Buenos días';
        $nombres = ['Ana', 'Enrique', 'Laura', 'Pablo'];

        return $this->render('prueba.html.twig', [
            'nombre' => $nombre,
            'saludo' => $saludo,
            'nombres' => $nombres,
            'fecha' => new DateTime()
        ]);
    }

    #[Route('/uno', name: 'sym_index1')]
    public function index1()
    {
        return $this->render('prueba1.html.twig');
    }

    #[Route('/dos', name: 'sym_index2')]
    public function index2()
    {
        $nombre = 'Juan';
        $saludo = 'Buenos días a todos';
        $nombres = ['Ana', 'Enrique', 'Laura', 'Pablo'];
        return $this->render('prueba2.html.twig', [
            'nombre' => $nombre,
            'saludo' => $saludo,
            'nombres' => $nombres,
            'fecha' => new \DateTime()
        ]);
    }
    
    # #[Route('/about', name: 'sym_about')]
   # public function abaut() {}
}
