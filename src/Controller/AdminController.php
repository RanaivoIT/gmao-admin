<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'url_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'title' => 'Administrateurs',
        ]);
    }

    #[Route('/admin/add', name: 'url_admin_add')]
    public function add(): Response
    {
        return $this->render('admin/add.html.twig', [
            'title' => 'Administrateurs',
        ]);
    }
}
