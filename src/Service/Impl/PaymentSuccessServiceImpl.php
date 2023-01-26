<?php

namespace App\Service\Impl;

use App\Service\ReferenceService;
use App\Service\TransactionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\PaymentSuccessService as BasePaymentSuccessService;
use App\Service\PaymentSuccessService as PaymentSuccessServiceInterface;

class PaymentSuccessServiceImpl extends BasePaymentSuccessService implements PaymentSuccessServiceInterface
{
    public function __construct(TransactionService $transactionService, ReferenceService $referenceService)
    {
        parent::__construct($transactionService, $referenceService);
    }
}