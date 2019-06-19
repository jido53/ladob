<?php

namespace App\Repository;

use App\Entity\AltaExpediente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AltaExpediente|null find($id, $lockMode = null, $lockVersion = null)
 * @method AltaExpediente|null findOneBy(array $criteria, array $orderBy = null)
 * @method AltaExpediente[]    findAll()
 * @method AltaExpediente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AltaExpedienteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AltaExpediente::class);
    }

//    /**
//     * @return AltaExpediente[] Returns an array of AltaExpediente objects
//     */

    public function bringRequest()
    {
    $conn = $this->getEntityManager()->getConnection();

    $sql = '
                select a.request 
                from exp_fis a
                where a.exp_id = 104896
        ';
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // returns an array of arrays (i.e. a raw data set)
    return $stmt->fetchAll();
    }


    /*
    public function findOneBySomeField($value): ?AltaExpediente
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
