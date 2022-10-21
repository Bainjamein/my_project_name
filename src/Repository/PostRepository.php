<?php

namespace App\Repository;


use App\Entity\Post;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

class PostRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry){

        parent::__construct($registry, Post::class);
    }

    // La générique findByTitle() sera remplacée par cette fonction
    public function findByTitle(string $value)
    {
        $query = $this->createQueryBuilder('p')
            ->andWhere('p.title like :val')
            ->setParameter('val', '%' . $value . '%')
            ->orderBy('p.id', 'ASC')
        ;
        return $query->getQuery()->getResult();
    }
}