<?php

namespace App\Controller\Admin;

use App\Entity\Contenir;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;

class ContenirCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Contenir::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('idCommande', 'Commande'),
            AssociationField::new('idProduit', 'Produit'),
            NumberField::new('Tarif'),
            IntegerField::new('Quantite'),
        ];
    }
}
