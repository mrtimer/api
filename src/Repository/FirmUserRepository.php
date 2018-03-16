<?php

namespace App\Repository;

use App\Entity\FirmUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FirmUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method FirmUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method FirmUser[]    findAll()
 * @method FirmUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FirmUserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FirmUser::class);
    }
}
