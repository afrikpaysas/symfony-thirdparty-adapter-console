<?php

namespace App\Mapper\Impl;

use App\Entity\Option;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Dto\OptionRequest;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\OptionCollection;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\OptionRequestCollection;
use Afrikpaysas\SymfonyThirdpartyAdapter\Mapper\OptionRequestMapper as BaseOptionRequestMapper;
use App\Mapper\OptionRequestMapper;

class OptionRequestMapperImpl extends  BaseOptionRequestMapper implements OptionRequestMapper
{
    public function __construct(string $entityClass = Option::class, string $dtoClass = OptionRequest::class, string $entitiesClass = OptionCollection::class, string $dtosClass = OptionRequestCollection::class)
    {
        parent::__construct($entityClass, $dtoClass, $entitiesClass, $dtosClass);
    }
}