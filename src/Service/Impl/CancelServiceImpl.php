<?php

namespace App\Service\Impl;

use App\Service\ReferenceService;
use App\Service\TransactionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\CancelService as BaseCancelService;
use App\Service\CancelService as CancelServiceInterface;

class CancelServiceImpl extends BaseCancelService implements CancelServiceInterface
{
    public function __construct(TransactionService $transactionService, ReferenceService $referenceService)
    {
        parent::__construct($transactionService, $referenceService);
    }
}