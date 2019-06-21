<?php

namespace App\Repository;

use App\Entity\Oju;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Oju|null find($id, $lockMode = null, $lockVersion = null)
 * @method Oju|null findOneBy(array $criteria, array $orderBy = null)
 * @method Oju[]    findAll()
 * @method Oju[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OjuRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Oju::class);
    }

//    /**
//     * @return Oju[] Returns an array of Oju objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Oju
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
