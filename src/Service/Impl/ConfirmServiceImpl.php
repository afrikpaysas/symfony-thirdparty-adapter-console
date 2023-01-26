<?php

namespace App\Service\Impl;

use App\Service\PaymentVerifyService;
use App\Service\ReferenceService;
use App\Service\TransactionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\ConfirmService as BaseConfirmService;
use App\Service\ConfirmService as ConfirmServiceInterface;

class ConfirmServiceImpl extends BaseConfirmService implements ConfirmServiceInterface
{
    public function __construct(TransactionService $transactionService, ReferenceService $referenceService, PaymentVerifyService $paymentVerifyService)
    {
        parent::__construct($transactionService, $referenceService, $paymentVerifyService);
    }
}