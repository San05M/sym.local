<?php

namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Imagen;
use Symfony\Component\Routing\Annotation\Route;


class ProyectoController extends AbstractController
{
    #[Route('/', name: 'sym_index')]

    public function index()
    {
        $imagenesHome[] = new Imagen('1.jpg', 'Imagen_1',1,456,61,130);
        $imagenesHome[] = new Imagen('1.jpg', 'Imagen_1',1,456,61,130);
        $imagenesHome[] = new Imagen('2.jpg', 'Imagen_2',2,455,64,130);
        $imagenesHome[] = new Imagen('3.jpg', 'Imagen_3',3,4,10,130);
        $imagenesHome[] = new Imagen('4.jpg', 'Imagen_4',1,46,50,130);
        $imagenesHome[] = new Imagen('9.jpg', 'Imagen_9',1,156,610,130);
        $imagenesHome[] = new Imagen('10.jpg', 'Imagen_10',2,956,610,130);
        $imagenesHome[] = new Imagen('11.jpg', 'Imagen_11',3,1456,610,130);
        $imagenesHome[] = new Imagen('12.jpg', 'Imagen_12',1,4356,610,130);
        $imagenesHome[] = new Imagen('12.jpg', 'Imagen_12',1,4356,610,130);

        return $this->render('index.view.html.twig', [
            'imagenes' => $imagenesHome
        ]);
    }

    #[Route('/blog', name: 'sym_blog')]

    public function indexBlog()
    {
        return $this->render('blog.view.html.twig');
    }

    #[Route('/contact', name: 'sym_contact')]

    public function indexContact()
    {
        return $this->render('contact.view.html.twig');
    }

    #[Route('/about', name: 'sym_about')]

    public function indexAbout()
    {
        $imagenesClientes[] = new Imagen('client1.jpg', 'SANDRA');
        $imagenesClientes[] = new Imagen('client2.jpg', 'PEDRO');
        $imagenesClientes[] = new Imagen('client3.jpg', 'CRUZ');
        $imagenesClientes[] = new Imagen('client4.jpg', 'IRENE');

        return $this->render('about.view.html.twig', [
            'imagenes' => $imagenesClientes
        ]);
    }
}