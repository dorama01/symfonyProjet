<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TemplateController extends AbstractController
{
    #[Route('/template', name: 'app_template')]
    public function index(): Response
    {
        $text="welcome";
        $years=[2020,2021,2022,2023];
        return $this->render(view:'template/index.html.twig',parameters:[
            "text" => $text,
            "years" => $years
        ]);
    }
}
