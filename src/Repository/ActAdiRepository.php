<?php

namespace App\Repository;

use App\Entity\ActAdi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
/*un comentario*/
/**
 * @method ActAdi|null find($id, $lockMode = null, $lockVersion = null)
 * @method ActAdi|null findOneBy(array $criteria, array $orderBy = null)
 * @method ActAdi[]    findAll()
 * @method ActAdi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActAdiRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ActAdi::class);
    }

//    /**
//     * @return ActAdi[] Returns an array of ActAdi objects
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
    public function findOneBySomeField($value): ?ActAdi
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
