<?php

namespace App\Mapper\Impl;

use App\Entity\Option;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Dto\OptionDTO;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\OptionCollection;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\OptionDTOCollection;
use App\Mapper\OptionMapper;
use Afrikpaysas\SymfonyThirdpartyAdapter\Mapper\OptionMapper as BaseOptionMapper;

class OptionMapperImpl extends BaseOptionMapper implements OptionMapper
{
    public function __construct(string $entityClass = Option::class, string $dtoClass = OptionDTO::class, string $entitiesClass = OptionCollection::class, string $dtosClass = OptionDTOCollection::class)
    {
        parent::__construct($entityClass, $dtoClass, $entitiesClass, $dtosClass);
    }
}