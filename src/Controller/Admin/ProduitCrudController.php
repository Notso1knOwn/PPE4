<?php

namespace App\Controller\Admin;

use App\Entity\Produit;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @IsGranted("ROLE_ADMIN")
 */
class ProduitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Produit::class;
    }

//    public function configureCrud(Crud $crud): Crud
//    {
//        return $crud->
//        ;
//    }

    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('lienImage')
                ->setBasePath('../Images/Produits')
                ->setUploadDir('Images/Produits')
                ->setUploadedFileNamePattern('[year]-[month]-[day]_[name].[extension]'),
            TextField::new('Marque'),
            TextField::new('Libelle'),
            NumberField::new('Tarif'),
            IntegerField::new('Stock'),
            AssociationField::new('id_categorie'),
        ];
    }

}
