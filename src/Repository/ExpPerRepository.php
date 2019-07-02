<?php

namespace App\Repository;

use App\Entity\ExpPer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ExpPer|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExpPer|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExpPer[]    findAll()
 * @method ExpPer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExpPerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ExpPer::class);
    }

//    /**
//     * @return ExpPer[] Returns an array of ExpPer objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ExpPer
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
