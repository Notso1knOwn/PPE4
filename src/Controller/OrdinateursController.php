<?php

namespace App\Controller;


use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdinateursController extends AbstractController
{
    /**
     * @Route("/tour", name="tour")
     */
    public function tourRoute(ProduitRepository $produitRepository): Response
    {

        return $this->render('ordinateurs/tour.html.twig', [
            'controller_name' => 'Ordinateur',
            'page_name' => 'Tour',
            'produits' => $produitRepository->findByIdCategorie(2),
        ]);
    }

    /**
     * @Route("/laptop", name="laptop")
     */
    public function laptopRoute(ProduitRepository $produitRepository): Response
    {
        return $this->render('ordinateurs/laptop.html.twig', [
            'controller_name' => 'Ordinateur',
            'page_name' => 'Laptop',
            'produits' => $produitRepository->findByIdCategorie(1),
        ]);
    }
}
