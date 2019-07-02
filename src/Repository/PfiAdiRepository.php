<?php

namespace App\Repository;

use App\Entity\PfiAdi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PfiAdi|null find($id, $lockMode = null, $lockVersion = null)
 * @method PfiAdi|null findOneBy(array $criteria, array $orderBy = null)
 * @method PfiAdi[]    findAll()
 * @method PfiAdi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PfiAdiRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PfiAdi::class);
    }

//    /**
//     * @return PfiAdi[] Returns an array of PfiAdi objects
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
    public function findOneBySomeField($value): ?PfiAdi
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
