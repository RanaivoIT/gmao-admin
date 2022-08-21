<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TechController extends AbstractController
{
    #[Route('/tech', name: 'url_tech')]
    public function index(): Response
    {
        return $this->render('tech/index.html.twig', [
            'title' => 'Techniciens',
        ]);
    }
    #[Route('/tech/add', name: 'url_tech_add')]
    public function add(): Response
    {
        return $this->render('tech/add.html.twig', [
            'title' => 'Techniciens',
        ]);
    }
}
