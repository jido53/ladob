<?php

namespace App\Repository;

use App\Entity\Pfi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pfi|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pfi|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pfi[]    findAll()
 * @method Pfi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PfiRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pfi::class);
    }

//    /**
//     * @return Pfi[] Returns an array of Pfi objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

//
//    public function find_list($value): ?Pfi
//    {
//        return $this->createQueryBuilder('p')
//            ->innerJoin('p.')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

}
