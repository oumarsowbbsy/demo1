<?php

namespace App\Repository;

use App\Entity\Categoryp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Categoryp|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categoryp|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categoryp[]    findAll()
 * @method Categoryp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorypRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categoryp::class);
    }

    // /**
    //  * @return Categoryp[] Returns an array of Categoryp objects
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
    public function findOneBySomeField($value): ?Categoryp
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
