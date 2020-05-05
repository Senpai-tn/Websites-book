<?php

namespace App\Repository;

use App\Entity\Website;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Website|null find($id, $lockMode = null, $lockVersion = null)
 * @method Website|null findOneBy(array $criteria, array $orderBy = null)
 * @method Website[]    findAll()
 * @method Website[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WebsiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Website::class);
    }

    public function findEntitiesByString($str){
        return $this->createQueryBuilder('s')
            ->where('s.Name like  :name and s.deletedAt IS NULL  ')
            ->setParameter('name', '%'.$str.'%')
            //->orderBy('s.price', 'DESC')
            //->setMaxResults(3)
            ->getQuery()
            ->getResult()
            ;
    }

    public function getDays(\DateTime $firstDateTime, \DateTime $lastDateTime)
    {
        return $this->createQueryBuilder('s')
            ->where('s.createdAt BETWEEN :firstDate AND :lastDate ')
            ->setParameter('firstDate', $firstDateTime)
            ->setParameter('lastDate', $lastDateTime)

            ->getQuery()
            ->getResult()
            ;
    }

    public function FindDeleted()
    {
        return $this->createQueryBuilder('s')
            ->where('s.deletedAt IS NOT NULL  ')
            ->getQuery()
            ->getResult()
            ;
    }

    // /**
    //  * @return Website[] Returns an array of Website objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Website
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
