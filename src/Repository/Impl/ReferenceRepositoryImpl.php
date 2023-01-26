<?php

namespace App\Repository\Impl;

use App\Entity\Reference;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\ReferenceCollection;
use App\Repository\ReferenceRepository;
use Afrikpaysas\SymfonyThirdpartyAdapter\Repository\ReferenceRepository as BaseReferenceRepository;
use Doctrine\Persistence\ManagerRegistry;

class ReferenceRepositoryImpl extends BaseReferenceRepository implements ReferenceRepository
{
    public function __construct(ManagerRegistry $registry, string $entityClass = Reference::class, string $collectionClass = ReferenceCollection::class)
    {
        parent::__construct($registry, $entityClass, $collectionClass);
    }
}