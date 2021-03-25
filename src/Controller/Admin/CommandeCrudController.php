<?php

namespace App\Controller\Admin;

use App\Entity\Commande;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class CommandeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Commande::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            DateTimeField::new('dateCommande'),
            AssociationField::new('idEtatCommande', 'Etat'),
            AssociationField::new('idClient', 'Client'),
            AssociationField::new('idPersonnel', 'Utilisateur'),

        ];
    }
}
