<?php

namespace App\Mapper\Impl;

use App\Entity\Reference;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Dto\ReferenceApiResponse;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\ReferenceApiResponseCollection;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\ReferenceCollection;
use Afrikpaysas\SymfonyThirdpartyAdapter\Mapper\ReferenceApiResponseMapper as BaseReferenceApiResponseMapper;
use App\Mapper\ReferenceApiResponseMapper;

class ReferenceApiResponseMapperImpl extends BaseReferenceApiResponseMapper implements ReferenceApiResponseMapper
{
    public function __construct(string $entityClass = Reference::class, string $dtoClass = ReferenceApiResponse::class, string $entitiesClass = ReferenceCollection::class, string $dtosClass = ReferenceApiResponseCollection::class)
    {
        parent::__construct($entityClass, $dtoClass, $entitiesClass, $dtosClass);
    }

}