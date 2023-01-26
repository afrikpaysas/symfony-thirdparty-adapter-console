<?php

namespace App\Repository\Impl;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\ParameterCollection;
use App\Entity\Parameter;
use App\Repository\ParameterRepository;
use Afrikpaysas\SymfonyThirdpartyAdapter\Repository\ParameterRepository as BaseParameterRepository;
use Doctrine\Persistence\ManagerRegistry;

class ParameterRepositoryImpl extends BaseParameterRepository implements ParameterRepository
{
    public function __construct(ManagerRegistry $registry, string $entityClass = Parameter::class, string $collectionClass = ParameterCollection::class)
    {
        parent::__construct($registry, $entityClass, $collectionClass);
    }
}