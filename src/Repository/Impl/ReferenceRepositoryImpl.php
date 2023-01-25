<?php

namespace App\Repository\Impl;

use App\Repository\ReferenceRepository;
use Afrikpaysas\SymfonyThirdpartyAdapter\Repository\ReferenceRepository as BaseReferenceRepository;
use Doctrine\Persistence\ManagerRegistry;

class ReferenceRepositoryImpl extends BaseReferenceRepository implements ReferenceRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry);
    }
}