<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'url_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'title' => 'Utilisateurs',
        ]);
    }
    #[Route('/user/add', name: 'url_user_add')]
    public function add(): Response
    {
        return $this->render('user/add.html.twig', [
            'title' => 'Utilisateurs',
        ]);
    }
}
