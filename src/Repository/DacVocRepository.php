<?php

namespace App\Repository;

use App\Entity\DacVoc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DacVoc|null find($id, $lockMode = null, $lockVersion = null)
 * @method DacVoc|null findOneBy(array $criteria, array $orderBy = null)
 * @method DacVoc[]    findAll()
 * @method DacVoc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DacVocRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DacVoc::class);
    }

//    /**
//     * @return DacVoc[] Returns an array of DacVoc objects
//     */
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
    public function findOneBySomeField($value): ?DacVoc
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
