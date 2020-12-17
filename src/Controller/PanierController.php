<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index(SessionInterface $session, ProduitRepository $produitRepository): Response
    {
        $panier = array();
        foreach ($session->get('panier') as $idProduit => $quantite){
            $arrayProduit = $produitRepository->findBy(['idProduit'=>$idProduit]);
            $produit = $arrayProduit[0];
            $produit->setLienImage('../Images/Ordinateur/Laptop/'.$produit->getLibelle());
            array_push($panier, array($produit, $quantite));
        }
        return $this->render('panier/index.html.twig', [
            'controller_name' => 'PanierController',
            'panier' => $panier,
        ]);
    }

    /**
     * @Route("/addPanier/{id}", name="addPanier")
     */
    public function addPanier(Produit $produit, SessionInterface $session, ProduitRepository $produitRepository):RedirectResponse
    {

        $produitBdd = $produitRepository->find($produit);

        if($session->get('panier', array()) == null ){
            $session->set('panier', array());
            $panier = $session->get('panier', array() );
        }else{
            $panier = $session->get('panier', array() );
        }

        if (isset( $panier[$produit->getIdProduit()]) ) {
            if($produitBdd->getStock() > $panier[$produit->getIdProduit()]){
                $panier[$produit->getIdProduit()]++;
                $this->addFlash('notice','Produit ajouté au panier');
            }else{
                $this->addFlash('notice','Votre panier possède tout le stock de ce produit');
            }
        } else {
            $panier[$produit->getIdProduit()] = 1;
        }

        $session->set('panier',$panier);
        return $this->redirectToRoute('accueil');
    }
}
