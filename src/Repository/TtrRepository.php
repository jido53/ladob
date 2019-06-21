<?php

namespace App\Repository;

use App\Entity\Ttr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Ttr|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ttr|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ttr[]    findAll()
 * @method Ttr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TtrRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ttr::class);
    }

//    /**
//     * @return Ttr[] Returns an array of Ttr objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ttr
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
