<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {
    /**
     * @Route("/hello", name="hello_base")
     * @Route("/hello/{prenom}", name="hello_prenom")
     * @Route("/hello/{prenom}/age/{age}",name="hello")
     *
     * Montre la page qui dit bonjour
     *
     * @return Response
     */
    public function hello($prenom = "anonyme", $age = 0): Response
    {
        return $this->render(
            'hello.html.twig',
            [
                'prenom' => $prenom,
                'age'=>$age
            ]
        );
    }

    /**
     * @Route("/", name="homepage")
     * @return Response
     */
    public function home(): Response
    {
    $prenoms = ['Lior' => 31, 'Joseph' => 12, 'Anne'=> 55];
        return $this->render(
            'home.html.twig',
            [
                'title' => "Hello World",
                'age' => 31,
                'tableau' => $prenoms
            ]
        );
    }
}