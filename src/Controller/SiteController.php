<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    #[Route('/site', name: 'url_site')]
    public function index(): Response
    {
        return $this->render('site/index.html.twig', [
            'title' => 'Sites',
        ]);
    }
    #[Route('/site/add', name: 'url_site_add')]
    public function add(): Response
    {
        return $this->render('site/add.html.twig', [
            'title' => 'Sites',
        ]);
    }
}
