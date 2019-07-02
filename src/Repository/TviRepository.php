<?php

namespace App\Repository;

use App\Entity\Tvi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Tvi|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tvi|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tvi[]    findAll()
 * @method Tvi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TviRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Tvi::class);
    }

//    /**
//     * @return Tvi[] Returns an array of Tvi objects
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
    public function findOneBySomeField($value): ?Tvi
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
