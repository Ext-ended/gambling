<?php

namespace App\Repository;

use App\Entity\SpinHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SpinHistory>
 */
class SpinHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SpinHistory::class);
    }

    public function SortAndSearch(string $user, string $sort, string $direction, int $limit, int $offset): array{
        $queryBuilder = $this->createQueryBuilder('s')
        ->innerJoin('s.spinnedUser', 'u');

        if(!empty($user)){
            $queryBuilder->andWhere('u.username LIKE :user')
            ->setParameter('user', '%'.$user.'%');
        }

        $sortString = ($sort == 'spinnedUser') ? 'u.username' : 's.'.$sort;
        
        return $queryBuilder->orderBy($sortString, $direction)
                            ->setMaxResults($limit)
                            ->setFirstResult($offset)
                            ->getQuery()
                            ->getResult();
    }

//    /**
//     * @return SpinHistory[] Returns an array of SpinHistory objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SpinHistory
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
