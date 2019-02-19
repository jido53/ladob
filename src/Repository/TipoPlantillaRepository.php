<?php

namespace App\Repository;

use App\Entity\TipoPlantilla;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TipoPlantilla|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoPlantilla|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoPlantilla[]    findAll()
 * @method TipoPlantilla[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoPlantillaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TipoPlantilla::class);
    }

//    /**
//     * @return TipoPlantilla[] Returns an array of TipoPlantilla objects
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
    public function findOneBySomeField($value): ?TipoPlantilla
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
