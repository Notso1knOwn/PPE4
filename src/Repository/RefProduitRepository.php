<?php

namespace App\Repository;

use App\Entity\RefProduit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RefProduit|null find($id, $lockMode = null, $lockVersion = null)
 * @method RefProduit|null findOneBy(array $criteria, array $orderBy = null)
 * @method RefProduit[]    findAll()
 * @method RefProduit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RefProduit::class);
    }

    // /**
    //  * @return RefProduit[] Returns an array of RefProduit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RefProduit
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
