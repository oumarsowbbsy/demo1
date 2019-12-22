<?php

namespace App\Repository;

use App\Entity\Dahira;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Dahira|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dahira|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dahira[]    findAll()
 * @method Dahira[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DahiraRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dahira::class);
    }

    // /**
    //  * @return Dahira[] Returns an array of Dahira objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dahira
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
