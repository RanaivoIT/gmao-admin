<?php

namespace App\Controller;

use App\Entity\Site;
use App\Repository\SiteRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SiteController extends AbstractController
{
    #[Route('/sites', name: 'sites')]
    public function index(SiteRepository $repo): Response
    {
        return $this->render('site/index.html.twig', [
            'title' => 'Sites',
            'sites' => $repo->findAll()
        ]);
    }
    
    #[Route('/sites/add', name: 'sites_add')]
    public function add(): Response
    {
        return $this->render('site/add.html.twig', [
            'title' => 'Sites',
        ]);
    }

    #[Route('/sites/{id}', name: 'sites_show')]
    public function show($id, SiteRepository $repo): Response
    {
        return $this->render('site/show.html.twig', [
            'title' => 'Sites',
            'site' => $repo->find($id)
        ]);
    }
}
