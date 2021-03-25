<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Request;
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
        if($session->get('panier')){
            foreach ($session->get('panier') as $idProduit => $quantite){
                $arrayProduit = $produitRepository->findBy(['id'=>$idProduit]);
                $produit = $arrayProduit[0];
                array_push($panier, array($produit, $quantite));
            }
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

        if (isset( $panier[$produit->getId()]) ) {
            if($produitBdd->getStock() > $panier[$produit->getId()]){
                $panier[$produit->getId()]++;
                $this->addFlash('notice','Produit ajouté au panier');
            }else{
                $this->addFlash('error','Stock atteint');
            }
        } else {
            $panier[$produit->getId()] = 1;
        }

        $session->set('panier',$panier);
        return $this->redirectToRoute('panier');
    }

    /**
     * @Route("/delProduitPanier/{id}", name="delProduitPanier")
     */
    public function delProduitPanier(Produit $produit, SessionInterface $session, ProduitRepository $produitRepository):RedirectResponse
    {

        if($session->get('panier', array()) == null ){
            $session->set('panier', array());
            $panier = $session->get('panier', array() );
        }else{
            $panier = $session->get('panier', array() );
        }

        if (isset( $panier[$produit->getId()]) ) {
            if($panier[$produit->getId()] > 1){
                $panier[$produit->getId()]--;
                $this->addFlash('notice','Produit décrémenté du panier');
            }else{
                unset($panier[$produit->getId()]);
                $this->addFlash('notice','Produit supprimé du panier');
            }
        } else {
            $this->addFlash('notice','Le produit ne se trouve pas dans le panier');
        }

        $session->set('panier',$panier);
        return $this->redirectToRoute('panier');
    }

    /**
     * @Route("/updatePanier", name="updatePanier")
     * * @param Request $request
     * @param Produit $produit
     * @param SessionInterface $session
     * @param ProduitRepository $produitRepository
     */
    public function updatePanier(Request $request, SessionInterface $session, ProduitRepository $produitRepository) :Response
    {
        $data = $request->request->all()['updatePanier'];

        foreach ($data as $idProduit => $quantite){
            $data[$idProduit] = intval($quantite, 10);
            if($data[$idProduit] === 0){
                unset($data[$idProduit]);
            }
        }
        $session->set('panier', $data);

        $panier = array();
        foreach ($session->get('panier') as $idProduit => $quantite){
            $arrayProduit = $produitRepository->findBy(['id'=>$idProduit]);
            $produit = $arrayProduit[0];
            array_push($panier, array($produit, $quantite));
        }

        return $this->render('panier/index.html.twig', [
            'controller_name' => 'PanierController',
            'panier' => $panier,
        ]);
    }
}
