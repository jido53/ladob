<?php

namespace App\Repository;

use App\Entity\ActuacionED;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ActuacionED|null find($id, $lockMode = null, $lockVersion = null)
 * @method ActuacionED|null findOneBy(array $criteria, array $orderBy = null)
 * @method ActuacionED[]    findAll()
 * @method ActuacionED[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActuacionEDRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ActuacionED::class);
    }

//    /**
//     * @return ActuacionED[] Returns an array of ActuacionED objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ActuacionED
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
