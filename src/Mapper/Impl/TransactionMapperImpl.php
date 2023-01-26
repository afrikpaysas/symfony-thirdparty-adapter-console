<?php

namespace App\Mapper\Impl;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Dto\TransactionDTO;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\TransactionCollection;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\TransactionDTOCollection;
use App\Entity\Transaction;
use App\Mapper\TransactionMapper;
use Afrikpaysas\SymfonyThirdpartyAdapter\Mapper\TransactionMapper as BaseTransactionMapper;

class TransactionMapperImpl extends BaseTransactionMapper implements TransactionMapper
{
    public function __construct(string $entityClass = Transaction::class, string $dtoClass = TransactionDTO::class, string $entitiesClass = TransactionCollection::class, string $dtosClass = TransactionDTOCollection::class)
    {
        parent::__construct($entityClass, $dtoClass, $entitiesClass, $dtosClass);
    }
}