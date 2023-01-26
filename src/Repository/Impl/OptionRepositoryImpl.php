<?php

namespace App\Repository\Impl;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\OptionCollection;
use App\Entity\Option;
use App\Repository\OptionRepository;
use Afrikpaysas\SymfonyThirdpartyAdapter\Repository\OptionRepository as BaseOptionRepository;
use Doctrine\Persistence\ManagerRegistry;

class OptionRepositoryImpl extends BaseOptionRepository implements OptionRepository
{
    public function __construct(ManagerRegistry $registry, string $entityClass = Option::class, string $collectionClass = OptionCollection::class)
    {
        parent::__construct($registry, $entityClass, $collectionClass);
    }
}