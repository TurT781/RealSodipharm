<?php

namespace App\Repository;

use App\Entity\Etagere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Etagere>
 */
class EtagereRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Etagere::class);
    }

    public function getHauteur(int $hauteur) 
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT hauteur
            FROM App\Entity\Etagere hauteur'
        )->setParameter('hauteur', $hauteur);

        return $query->getResult();
    }
    //    /**
    //     * @return Etagere[] Returns an array of Etagere objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('e.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Etagere
    //    {
    //        return $this->createQueryBuilder('e')
    //            ->andWhere('e.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
