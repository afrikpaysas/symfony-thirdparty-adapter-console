<?php

namespace App\Mapper\Impl;

use App\Entity\Reference;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Dto\ReferenceDTO;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\ReferenceCollection;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\ReferenceDTOCollection;
use Afrikpaysas\SymfonyThirdpartyAdapter\Mapper\ReferenceMapper as BaseReferenceMapper;
use App\Mapper\ReferenceMapper;

class ReferenceMapperImpl extends BaseReferenceMapper implements ReferenceMapper
{
    public function __construct(string $entityClass = Reference::class, string $dtoClass = ReferenceDTO::class, string $entitiesClass = ReferenceCollection::class, string $dtosClass = ReferenceDTOCollection::class)
    {
        parent::__construct($entityClass, $dtoClass, $entitiesClass, $dtosClass);
    }
}