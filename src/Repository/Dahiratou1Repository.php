<?php

namespace App\Repository;

use App\Entity\Dahiratou1;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Dahiratou1|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dahiratou1|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dahiratou1[]    findAll()
 * @method Dahiratou1[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Dahiratou1Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dahiratou1::class);
    }

    // /**
    //  * @return Dahiratou1[] Returns an array of Dahiratou1 objects
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
    public function findOneBySomeField($value): ?Dahiratou1
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
