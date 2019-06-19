<?php

namespace App\Repository;

use App\Entity\TipoExpediente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TipoExpediente|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoExpediente|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoExpediente[]    findAll()
 * @method TipoExpediente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoExpedienteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TipoExpediente::class);
    }

//    /**
//     * @return TipoExpediente[] Returns an array of TipoExpediente objects
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
    public function findOneBySomeField($value): ?TipoExpediente
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
