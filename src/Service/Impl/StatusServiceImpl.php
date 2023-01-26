<?php

namespace App\Service\Impl;

use App\Mapper\ReferenceMapper;
use App\Mapper\TransactionMapper;
use App\Service\ReferenceService;
use App\Service\TransactionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\StatusService as BaseStatusService;
use App\Service\StatusService as StatusServiceInterface;

class StatusServiceImpl extends BaseStatusService implements StatusServiceInterface
{
    public function __construct(TransactionService $transactionService, ReferenceService $referenceService, ReferenceMapper $referenceMapper, TransactionMapper $transactionMapper)
    {
        parent::__construct($transactionService, $referenceService, $referenceMapper, $transactionMapper);
    }
}