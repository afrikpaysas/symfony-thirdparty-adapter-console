<?php

namespace App\Service\Impl;

use Afrikpaysas\SymfonyThirdpartyAdapter\Service\TransactionService as BaseTransactionService;
use App\Service\TransactionService as TransactionServiceInterface;
use App\Repository\TransactionRepository;

class TransactionServiceImpl extends BaseTransactionService implements TransactionServiceInterface
{
    public function __construct(TransactionRepository $transRepository)
    {
        parent::__construct($transRepository);
    }
}