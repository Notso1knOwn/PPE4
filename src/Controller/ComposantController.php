<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ComposantController extends AbstractController
{
    /**
     * @Route("/processeur", name="processeur")
     */
    public function processeurRoute(): Response
    {
        return $this->render('composant/processeur.html.twig', [
            'controller_name' => 'Composant',
            'page_name' => 'processeur',
        ]);
    }

    /**
     * @Route("/carteMere", name="carteMere")
     */
    public function carteMereRoute(): Response
    {
        return $this->render('composant/carteMere.html.twig', [
            'controller_name' => 'ComposantController',
        ]);
    }

    /**
     * @Route("/carteGraphique", name="carteGraphique")
     */
    public function carteGraphiqueRoute(): Response
    {
        return $this->render('composant/carteGraphique.html.twig', [
            'controller_name' => 'ComposantController',
        ]);
    }

    /**
     * @Route("/ram", name="ram")
     */
    public function ramRoute(): Response
    {
        return $this->render('composant/ram.html.twig', [
            'controller_name' => 'ComposantController',
        ]);
    }

    /**
     * @Route("/stockage", name="stockage")
     */
    public function stockageRoute(): Response
    {
        return $this->render('composant/stockage.html.twig', [
            'controller_name' => 'ComposantController',
        ]);
    }

    /**
     * @Route("/refroidissement", name="refroidissement")
     */
    public function refroidissementRoute(): Response
    {
        return $this->render('composant/refroidissement.html.twig', [
            'controller_name' => 'ComposantController',
        ]);
    }

    /**
     * @Route("/alimentation", name="alimentation")
     */
    public function alimentationRoute(): Response
    {
        return $this->render('composant/alimentation.html.twig', [
            'controller_name' => 'ComposantController',
        ]);
    }

    /**
     * @Route("/boitier", name="boitier")
     */
    public function boitierRoute(): Response
    {
        return $this->render('composant/boitier.html.twig', [
            'controller_name' => 'ComposantController',
        ]);
    }
}
