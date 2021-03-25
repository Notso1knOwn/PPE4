<?php

namespace App\Controller\Admin;

use App\Entity\AvisProduit;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @IsGranted("ROLE_ADMIN")
 */
class AvisProduitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AvisProduit::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            NumberField::new('Note'),
            TextEditorField::new('description'),
            DateTimeField::new('Date_Avis'),
            AssociationField::new('idClient'),
            AssociationField::new('idProduit'),
            AssociationField::new('idCommande'),
        ];
    }
}
