<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreerConfigController extends AbstractController
{
    /**
     * @Route("/creerConfig", name="creerConfig")
     */
    public function index(): Response
    {
        return $this->render('creer_config/index.html.twig', [
            'controller_name' => 'CreerConfigController',
        ]);
    }
}
