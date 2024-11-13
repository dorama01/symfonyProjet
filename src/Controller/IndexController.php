<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route(path: '/index', name: 'app_index')]
    public function index(): Response
    {
        return new Response(content:"Hello world!");
    }
    #[Route(path: '/about/{nom}', name: 'app_about',requirements:['nom'=>'\d+'])]
    public function about(string $nom="Anonyme"):Response
    {
        return new Response(content:"Hello ".$nom);
    }
}
