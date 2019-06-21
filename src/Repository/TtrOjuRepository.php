<?php

namespace App\Repository;

use App\Entity\TtrOju;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TtrOju|null find($id, $lockMode = null, $lockVersion = null)
 * @method TtrOju|null findOneBy(array $criteria, array $orderBy = null)
 * @method TtrOju[]    findAll()
 * @method TtrOju[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TtrOjuRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TtrOju::class);
    }

//    /**
//     * @return TtrOju[] Returns an array of TtrOju objects
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
    public function findOneBySomeField($value): ?TtrOju
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
