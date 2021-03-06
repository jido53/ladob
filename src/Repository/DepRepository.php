<?php

namespace App\Repository;

use App\Entity\Dep;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Dep|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dep|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dep[]    findAll()
 * @method Dep[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DepRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Dep::class);
    }
    

    public function findDepbyOrg($org_id): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
                select dep_id, dep_descr
                from dep
                where org_id = :org_id;
            ';
        $stmt = $conn->prepare($sql);
        $stmt->execute(['org_id' => $org_id]);

        // returns an array of arrays (i.e. a raw data set)
        return $stmt->fetchAll();
    }

//    /**
//     * @return Dep[] Returns an array of Dep objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dep
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
