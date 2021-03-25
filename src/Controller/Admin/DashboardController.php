<?php

namespace App\Controller\Admin;

use App\Entity\AvisProduit;
use App\Entity\Categorie;
use App\Entity\Client;
use App\Entity\Commande;
use App\Entity\Contenir;
use App\Entity\EtatCommande;
use App\Entity\Produit;
use App\Entity\Profil;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @IsGranted("ROLE_ADMIN")
 */
class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('PPE4');
    }

    public function configureMenuItems(): iterable
    {
//        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');

        return [
            MenuItem::linktoDashboard('Dashboard', 'fa fa-home'),
            MenuItem::section('Produits'),
            MenuItem::linkToCrud('Categories', 'fas fa-layer-group', Categorie::class),
            MenuItem::linkToCrud('Produits', 'fas fa-barcode', Produit::class),
            MenuItem::linkToCrud('Avis Produits', 'far fa-comment-dots', AvisProduit::class),

            MenuItem::section('Utilisateurs'),
            MenuItem::linkToCrud('Clients', 'fas fa-users', Client::class),
            MenuItem::linkToCrud('Utilisateurs', 'fas fa-user-tie', User::class),

            MenuItem::section('Commandes'),
            MenuItem::linkToCrud('Commandes', 'fas fa-shopping-cart', Commande::class),
            MenuItem::linkToCrud('Produits', 'fas fa-cart-arrow-down', Contenir::class),
            MenuItem::linkToCrud('Etat', 'fas fa-spinner', EtatCommande::class),
        ];
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
