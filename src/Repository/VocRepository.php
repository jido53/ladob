<?php

namespace App\Repository;

use App\Entity\Voc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Voc|null find($id, $lockMode = null, $lockVersion = null)
 * @method Voc|null findOneBy(array $criteria, array $orderBy = null)
 * @method Voc[]    findAll()
 * @method Voc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VocRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Voc::class);
    }

//    /**
//     * @return Voc[] Returns an array of Voc objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Voc
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
