<?php

namespace App\Repository;

use App\Entity\Correos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Correos|null find($id, $lockMode = null, $lockVersion = null)
 * @method Correos|null findOneBy(array $criteria, array $orderBy = null)
 * @method Correos[]    findAll()
 * @method Correos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CorreosRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Correos::class);
    }


    public function findPeriodo($periodo): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "SELECT efc_a_id, efc_id, ent_tipo, efc_a_feccre, efc_a_fecpro, efc_a_estado, efc_a_asunto, efc_a_cuerpo, efc_a_destino   from iurix.efc_aprocesar where efc_a_fecpro >  CURRENT_DATE - INTERVAL '3 days' ";
        $stmt = $conn->prepare($sql);
        //$stmt->execute(['periodo' => $periodo]);
        $stmt->execute();

    // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

    public function findPeriodo2($periodo): array
    {
        $qb = $this->createQueryBuilder('p')
        ->andWhere('p.efc_a_fecpro > :periodo')
        ->setParameter('periodo', new \DateTime($periodo))
        ->orderBy('p.efc_a_fecpro', 'DESC')
        ->getQuery();

        return $qb->execute();

    }
//    /**
//     * @return Correos[] Returns an array of Correos objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Correos
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
