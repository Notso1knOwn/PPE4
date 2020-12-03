<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdinateursController extends AbstractController
{
    /**
     * @Route("/tour", name="tour")
     */
    public function tourRoute(): Response
    {
        return $this->render('ordinateurs/tour.html.twig', [
            'controller_name' => 'OrdinateursController',
        ]);
    }

    /**
     * @Route("/laptop", name="laptop")
     */
    public function laptopRoute(): Response
    {
        return $this->render('ordinateurs/laptop.html.twig', [
            'controller_name' => 'OrdinateursController',
        ]);
    }
}