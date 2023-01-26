<?php

namespace App\Service\Impl;

use App\Service\TransactionService;
use App\Service\VerifyService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\PaymentVerifyService as BasePaymentVerifyService;
use App\Service\PaymentVerifyService as PaymentVerifyServiceInterface;

class PaymentVerifyServiceImpl extends BasePaymentVerifyService implements PaymentVerifyServiceInterface
{
    public function __construct(TransactionService $transactionService, VerifyService $verifyService)
    {
        parent::__construct($transactionService, $verifyService);
    }
}