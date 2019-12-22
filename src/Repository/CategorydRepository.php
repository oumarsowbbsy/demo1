<?php

namespace App\Repository;

use App\Entity\Categoryd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Categoryd|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categoryd|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categoryd[]    findAll()
 * @method Categoryd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorydRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categoryd::class);
    }

    // /**
    //  * @return Categoryd[] Returns an array of Categoryd objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Categoryd
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
