<?php

namespace App\Repository;

use App\Entity\Categorya;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Categorya|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categorya|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categorya[]    findAll()
 * @method Categorya[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categorya::class);
    }

    // /**
    //  * @return Categorya[] Returns an array of Categorya objects
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
    public function findOneBySomeField($value): ?Categorya
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
