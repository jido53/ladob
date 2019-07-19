<?php

namespace App\Repository;

use App\Entity\DepUsrPfl;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DepUsrPfl|null find($id, $lockMode = null, $lockVersion = null)
 * @method DepUsrPfl|null findOneBy(array $criteria, array $orderBy = null)
 * @method DepUsrPfl[]    findAll()
 * @method DepUsrPfl[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DepUsrPflRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DepUsrPfl::class);
    }

    // /**
    //  * @return DepUsrPfl[] Returns an array of DepUsrPfl objects
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
    public function findOneBySomeField($value): ?DepUsrPfl
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
