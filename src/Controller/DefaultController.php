<?php

namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index()
    {
        $nombre = 'María';
        $saludo = 'Buenos días';
        $nombres = [ 'Ana','Enrique','Laura','Pablo' ];

        return $this->render('prueba.html.twig', [
            'nombre' => $nombre,
            'saludo' => $saludo,
            'nombres' => $nombres,
            'fecha'=> new DateTime()
        ]);
    }
}