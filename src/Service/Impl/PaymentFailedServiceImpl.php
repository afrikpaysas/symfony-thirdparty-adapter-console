<?php

namespace App\Service\Impl;

use App\Service\TransactionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\PaymentFailedService as BasePaymentFailedService;
use App\Service\PaymentFailedService as PaymentFailedServiceInterface;

class PaymentFailedServiceImpl extends BasePaymentFailedService implements PaymentFailedServiceInterface
{
    public function __construct(TransactionService $transactionService)
    {
        parent::__construct($transactionService);
    }
}