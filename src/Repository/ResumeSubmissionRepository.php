<?php

namespace App\Repository;

use App\Entity\ResumeSubmission;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ResumeSubmissionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResumeSubmission::class);
    }

    public function findMostPositiveResume()
    {
        return $this->createQueryBuilder('rs')
            ->select('r.jobTitle, COUNT(rs.id) as positiveCount')
            ->innerJoin('rs.resume', 'r')
            ->where('rs.positiveFeedback = :positive')
            ->setParameter('positive', true)
            ->groupBy('r.id')
            ->orderBy('positiveCount', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
