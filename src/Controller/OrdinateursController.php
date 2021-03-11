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
            'produits' => $produitRepository->findByIdCategorie(5),
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
            'produits' => $produitRepository->findByIdCategorie(4),
        ]);
    }

    /**
     * @Route("/getTour", name="getTour")
     */
    public function getTour(ProduitRepository $produitRepository)
    {
        $produits = $produitRepository->findByIdCategorie(5);
        $json = '{';
        foreach ($produits as $key => $produit){
            if ( $key !== (count($produits)-1) ) {
                $json .= '"produit'.$key.'" : ';
                $json .= $produit->toJSON();
                $json .= ',';
            } else {
                $json .= '"produit'.$key.'" : ';
                $json .= $produit->toJSON();
            }
        }
        $json .= '}';
//        echo '<pre>';
//        echo $json;
//        echo '</pre>';
//        echo '<pre>';
//        var_dump(json_decode($json));
//        echo '</pre>';
         return new Response($json);
    }
}
