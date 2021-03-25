<?php

namespace App\Controller\Admin;

use App\Entity\Client;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @IsGranted("ROLE_ADMIN")
 */
class ClientCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Client::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Prenom'),
            TextField::new('Nom'),
            EmailField::new('Email'),
            TextField::new('adresseFac', 'Adresse de facturation'),
            TextField::new('adrComplementFac', 'Complement de facturation'),
            TextField::new('villeFac', 'Ville de facturation'),
            TextField::new('paysFac', 'Pays de facturation'),
        ];
    }
}
