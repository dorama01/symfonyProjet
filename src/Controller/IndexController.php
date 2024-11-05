<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        return new Response(content:"Hello world!");
    }
    #[Route('/about', name: 'app_about')]
    public function about():Response
    {
        return new Response(content:"Hello douae");
    }
}
