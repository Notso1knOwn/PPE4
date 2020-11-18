<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Client;
use App\Entity\EtatCommande;
use App\Entity\Profil;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        # region Profil
            $profil_user = new Profil();
            $profil_user->setLibelle('Administrateur');
            $profil_user->setDescriptif('');
            $manager->persist($profil_user);

            $profil_admin = new Profil();
            $profil_admin->setLibelle('Agent');
            $profil_admin->setDescriptif('');
            $manager->persist($profil_admin);
        # endregion

        # region Client
            $client = new Client();
            $client->setPrenom('test');
            $client->setNom('TEST');
            $client->setEmail('test@test.com');
            $client->setTelephone('0606060606');
            $manager->persist($client);
        # endregion

        # region Catégorie
            $portable = new Categorie();
            $portable->setLibelle('PC Portable');
            $portable->setDescriptif('Mobile, léger, puissant');
            $manager->persist($portable);

            $tour = new Categorie();
            $tour->setLibelle('Tour Gaming');
            $tour->setDescriptif('Puissant, durable, Personnalisable');
            $manager->persist($tour);

            $composant = new Categorie();
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

        # region Personnel

        # endregion

        # region Produit

        # endregion

        # region Commande

        # endregion

        # region Ref_Produit

        # endregion

        # region Contenir

        # endregion


        $manager->flush();
    }
}
