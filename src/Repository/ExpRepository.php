<?php

namespace App\Repository;

use App\Entity\Exp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Exp|null find($id, $lockMode = null, $lockVersion = null)
 * @method Exp|null findOneBy(array $criteria, array $orderBy = null)
 * @method Exp[]    findAll()
 * @method Exp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExpRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Exp::class);
    }

//    /**
//     * @return Exp[] Returns an array of Exp objects
//     */
    
    public function findList()
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.exp_id', 'ASC')
            ->setMaxResults(100)
            ->getQuery()
            ->getResult()
        ;
    }
    

    /*
    public function findOneBySomeField($value): ?Exp
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
