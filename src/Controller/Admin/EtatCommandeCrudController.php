<?php

namespace App\Controller\Admin;

use App\Entity\EtatCommande;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @IsGranted("ROLE_ADMIN")
 */
class EtatCommandeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return EtatCommande::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Libelle'),
            TextField::new('Descriptif'),
        ];
    }
}
