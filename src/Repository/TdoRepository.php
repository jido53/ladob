<?php

namespace App\Repository;

use App\Entity\Tdo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Tdo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tdo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tdo[]    findAll()
 * @method Tdo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TdoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Tdo::class);
    }

    // /**
    //  * @return Tdo[] Returns an array of Tdo objects
    //  */
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
    public function findOneBySomeField($value): ?Tdo
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
