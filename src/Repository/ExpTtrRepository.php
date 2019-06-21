<?php

namespace App\Repository;

use App\Entity\ExpTtr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ExpTtr|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExpTtr|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExpTtr[]    findAll()
 * @method ExpTtr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExpTtrRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ExpTtr::class);
    }

//    /**
//     * @return ExpTtr[] Returns an array of ExpTtr objects
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
    public function findOneBySomeField($value): ?ExpTtr
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
