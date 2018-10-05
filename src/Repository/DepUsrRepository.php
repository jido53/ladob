<?php

namespace App\Repository;

use App\Entity\DepUsr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DepUsr|null find($id, $lockMode = null, $lockVersion = null)
 * @method DepUsr|null findOneBy(array $criteria, array $orderBy = null)
 * @method DepUsr[]    findAll()
 * @method DepUsr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DepUsrRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DepUsr::class);
    }

public function findUserbyDep($dep_id): array
{
    $conn = $this->getEntityManager()->getConnection();

    $sql = '
                select usr.usr_nombre, dep_usr.dep_id
                from usr, dep_usr
                where usr.usr_id = dep_usr.usr_id
                and dep_usr.dep_id = :dep_id
        ';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['dep_id' => $dep_id]);

    // returns an array of arrays (i.e. a raw data set)
    return $stmt->fetchAll();
}

//    /**
//     * @return DepUsr[] Returns an array of DepUsr objects
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
    public function findOneBySomeField($value): ?DepUsr
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
