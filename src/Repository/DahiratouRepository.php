<?php

namespace App\Repository;

use App\Entity\Dahiratou;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Dahiratou|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dahiratou|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dahiratou[]    findAll()
 * @method Dahiratou[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DahiratouRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dahiratou::class);
    }

    // /**
    //  * @return Dahiratou[] Returns an array of Dahiratou objects
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
    public function findOneBySomeField($value): ?Dahiratou
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
