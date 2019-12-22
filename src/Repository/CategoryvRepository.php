<?php

namespace App\Repository;

use App\Entity\Categoryv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Categoryv|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categoryv|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categoryv[]    findAll()
 * @method Categoryv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categoryv::class);
    }

    // /**
    //  * @return Categoryv[] Returns an array of Categoryv objects
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
    public function findOneBySomeField($value): ?Categoryv
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
