<?php

namespace App\Repository;

use App\Entity\ExpAdi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ExpAdi|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExpAdi|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExpAdi[]    findAll()
 * @method ExpAdi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExpAdiRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ExpAdi::class);
    }

//    /**
//     * @return ExpAdi[] Returns an array of ExpAdi objects
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
    public function findOneBySomeField($value): ?ExpAdi
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
