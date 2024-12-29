<?php

namespace App\Controller;

use App\Entity\Person;
use App\Form\PersonType;
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
    #[Route(path: '/dummy', name: 'app_dummy')]
    public function dummy():Response
    {
        $text="Hello this home";
        $tabyear=[2020,2021,2022,2023];
        return $this->render(view:'index/dummy.html.twig',parameters:[
            "text"=>$text,
            "years"=>$tabyear
        ]);;
    }
    #[Route(path: '/dispalayForm', name: 'app_dispalayForm')]
    public function dispalayForm(): Response
    {
        $douae =new Person();
        $personneForm= $this->createForm(PersonType::class,$douae);
        return $this->render(view:'index/dispalayForm.html.twig',parameters:["form"=>$personneForm]);;
    }
}
