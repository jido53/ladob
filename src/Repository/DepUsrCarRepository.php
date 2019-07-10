<?php

namespace App\Repository;

use App\Entity\DepUsrCar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DepUsrCar|null find($id, $lockMode = null, $lockVersion = null)
 * @method DepUsrCar|null findOneBy(array $criteria, array $orderBy = null)
 * @method DepUsrCar[]    findAll()
 * @method DepUsrCar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DepUsrCarRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DepUsrCar::class);
    }

    // /**
    //  * @return DepUsrCar[] Returns an array of DepUsrCar objects
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
    public function findOneBySomeField($value): ?DepUsrCar
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
