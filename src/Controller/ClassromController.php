<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassromController extends AbstractController
{
    /**
     * @Route("/classrom", name="classrom")
     */
    public function index(): Response
    {
        return $this->render('classrom/index.html.twig', [
            'controller_name' => 'ClassromController',
        ]);
    }
    
}
