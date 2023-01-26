<?php

namespace App\Repository\Impl;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\TransactionCollection;
use App\Entity\Transaction;
use App\Repository\TransactionRepository;
use Afrikpaysas\SymfonyThirdpartyAdapter\Repository\TransactionRepository as BaseTransactionRepository;
use Doctrine\Persistence\ManagerRegistry;

class TransactionRepositoryImpl extends BaseTransactionRepository implements TransactionRepository
{
    public function __construct(ManagerRegistry $registry, string $entityClass = Transaction::class, string $collectionClass = TransactionCollection::class)
    {
        parent::__construct($registry, $entityClass, $collectionClass);
    }
}