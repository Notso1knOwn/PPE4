<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Client;
use App\Entity\Commande;
use App\Entity\Contenir;
use App\Entity\EtatCommande;
use App\Entity\Produit;
use App\Entity\Profil;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        # region Profil
            $profil_user = new Profil();
            $profil_user->setIdProfil(1);
            $profil_user->setLibelle('Administrateur');
            $profil_user->setDescriptif('');
            $manager->persist($profil_user);

            $profil_admin = new Profil();
            $profil_admin->setIdProfil(2);
            $profil_admin->setLibelle('Agent');
            $profil_admin->setDescriptif('');
            $manager->persist($profil_admin);
        # endregion

        # region Client
            $client = new Client();
            $client->setIdClient(1);
            $client->setPrenom('test');
            $client->setNom('TEST');
            $client->setEmail('test@test.com');
            $client->setTelephone('0606060606');
            $manager->persist($client);
        # endregion

        # region Catégorie
            $portable = new Categorie();
            $portable->setIdCategorie(1);
            $portable->setLibelle('PC Portable');
            $portable->setDescriptif('Mobile, léger, puissant');
            $manager->persist($portable);

            $tour = new Categorie();
            $tour->setIdCategorie(2);
            $tour->setLibelle('Tour Gaming');
            $tour->setDescriptif('Puissant, durable, Personnalisable');
            $manager->persist($tour);

            $composant = new Categorie();
            $composant->setIdCategorie(3);
            $composant->setLibelle('Composants');
            $composant->setDescriptif('Variés, Accessible');
            $manager->persist($composant);
        # endregion

        # region Etat_commande
            $etatCommande1 = new EtatCommande();
            $etatCommande1->setIdEtatCommande(1);
            $etatCommande1->setLibelle('non-payé');
            $etatCommande1->setDescriptif('');
            $manager->persist($etatCommande1);

        $etatCommande2 = new EtatCommande();
        $etatCommande2->setIdEtatCommande(2);
        $etatCommande2->setLibelle('payé');
        $etatCommande2->setDescriptif('');
        $manager->persist($etatCommande2);

        $etatCommande3 = new EtatCommande();
        $etatCommande3->setIdEtatCommande(3);
        $etatCommande3->setLibelle('en cours de préparation');
        $etatCommande3->setDescriptif('');
        $manager->persist($etatCommande3);

        $etatCommande4 = new EtatCommande();
        $etatCommande4->setIdEtatCommande(4);
        $etatCommande4->setLibelle('préparé');
        $etatCommande4->setDescriptif('');
        $manager->persist($etatCommande4);

        $etatCommande5 = new EtatCommande();
        $etatCommande5->setIdEtatCommande(5);
        $etatCommande5->setLibelle('expédié');
        $etatCommande5->setDescriptif('');
        $manager->persist($etatCommande5);

        $etatCommande6 = new EtatCommande();
        $etatCommande6->setIdEtatCommande(6);
        $etatCommande6->setLibelle('livré');
        $etatCommande6->setDescriptif('');
        $manager->persist($etatCommande6);

        $etatCommande7 = new EtatCommande();
        $etatCommande7->setIdEtatCommande(7);
        $etatCommande7->setLibelle('terminé');
        $etatCommande7->setDescriptif('');
        $manager->persist($etatCommande7);
        # endregion

        # region Produit
            $produit1 = new Produit();
            $produit1->setIdProduit(1);
            $produit1->setLibelle('Asus ROG Strix G (G531GT-HN574T)');
            $produit1->setDescription('');
            $produit1->setTarif('1099.9900');
            $produit1->setStock(10);
            $produit1->setNote('8.00');
            $produit1->setLienImage('');
            $produit1->setIdCategorie(1);
            $manager->persist($produit1);

            $produit2 = new Produit();
            $produit2->setIdProduit(2);
            $produit2->setLibelle('test2');
            $produit2->setDescription('');
            $produit2->setTarif('40.00');
            $produit2->setStock(50);
            $produit2->setNote('6.00');
            $produit2->setLienImage('');
            $produit2->setIdCategorie(3);
            $manager->persist($produit2);

        $produit3 = new Produit();
        $produit3->setIdProduit(3);
        $produit3->setLibelle('test3');
        $produit3->setDescription('');
        $produit3->setTarif('50.00');
        $produit3->setStock(20);
        $produit3->setNote('8.00');
        $produit3->setLienImage('');
        $produit3->setIdCategorie(3);
        $manager->persist($produit3);

        $produit4 = new Produit();
        $produit4->setIdProduit(4);
        $produit4->setLibelle('test4');
        $produit4->setDescription('');
        $produit4->setTarif('25.00');
        $produit4->setStock(25);
        $produit4->setNote('9.00');
        $produit4->setLienImage('');
        $produit4->setIdCategorie(3);
        $manager->persist($produit4);

        $produit5 = new Produit();
        $produit5->setIdProduit(5);
        $produit5->setLibelle('test5');
        $produit5->setDescription('');
        $produit5->setTarif('400.00');
        $produit5->setStock(50);
        $produit5->setNote('6.00');
        $produit5->setLienImage('');
        $produit5->setIdCategorie(2);
        $manager->persist($produit5);

        $produit6 = new Produit();
        $produit6->setIdProduit(6);
        $produit6->setLibelle('test6');
        $produit6->setDescription('');
        $produit6->setTarif('1200.00');
        $produit6->setStock(9);
        $produit6->setNote('8.00');
        $produit6->setLienImage('');
        $produit6->setIdCategorie(2);
        $manager->persist($produit6);

        $produit7 = new Produit();
        $produit7->setIdProduit(7);
        $produit7->setLibelle('test7');
        $produit7->setDescription('');
        $produit7->setTarif('2000.00');
        $produit7->setStock(5);
        $produit7->setNote('9.00');
        $produit7->setLienImage('');
        $produit7->setIdCategorie(2);
        $manager->persist($produit7);
        # endregion

        # region Commande
            $commande1 = new Commande();
            $commande1->setIdCommande(1);
            $commande1->setDateCommande(new \DateTime('2020-11-02 19:09:07'));
            $commande1->setIdEtatCommande(1);
            $commande1->setIdClient(1);
            $commande1->setIdPersonnel(1);
            $manager->persist($commande1);
        # endregion

        # region Ref_Produit

        # endregion

        # region Contenir
            $contenir1 = new Contenir();
            $contenir1->setIdCommande(1);
            $contenir1->setIdProduit(1);
            $contenir1->setQuantite(9);
            $manager->persist($contenir1);

            $contenir2 = new Contenir();
            $contenir2->setIdCommande(1);
            $contenir2->setIdProduit(3);
            $contenir2->setQuantite(2);
            $manager->persist($contenir2);

            $contenir3 = new Contenir();
            $contenir3->setIdCommande(1);
            $contenir3->setIdProduit(6);
            $contenir3->setQuantite(8);
            $manager->persist($contenir3);

        # endregion


        $manager->flush();
    }
}
