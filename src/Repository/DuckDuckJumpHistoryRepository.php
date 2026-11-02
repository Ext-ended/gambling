<?php

namespace App\Repository;

use App\Entity\DuckDuckJumpHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DuckDuckJumpHistory>
 */
class DuckDuckJumpHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DuckDuckJumpHistory::class);
    }

    public function SortAndSearch(string $user, string $sort, string $direction, int $limit, int $offset): array{
        $queryBuilder = $this->createQueryBuilder('d')
        ->innerJoin('d.player_id', 'u');

        if(!empty($user)){
            $queryBuilder->andWhere('u.username LIKE :user')
            ->setParameter('user', '%'.$user.'%');
        }

        $sortString = ($sort == 'player_id') ? 'u.username' : 'd.'.$sort;
        
        return $queryBuilder->orderBy($sortString, $direction)
                            ->setMaxResults($limit)
                            ->setFirstResult($offset)
                            ->getQuery()
                            ->getResult();
    }

//    /**
//     * @return DuckDuckJumpHistory[] Returns an array of DuckDuckJumpHistory objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DuckDuckJumpHistory
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
