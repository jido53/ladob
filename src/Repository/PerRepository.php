<?php

namespace App\Repository;

use App\Entity\Per;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Per|null find($id, $lockMode = null, $lockVersion = null)
 * @method Per|null findOneBy(array $criteria, array $orderBy = null)
 * @method Per[]    findAll()
 * @method Per[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Per::class);
    }

//    /**
//     * @return Per[] Returns an array of Per objects
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

    /*
    public function findOneBySomeField($value): ?Per
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
