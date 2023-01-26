<?php

namespace App\Service\Impl;

use App\Service\TransactionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\PaymentErrorService as BasePaymentErrorService;
use App\Service\PaymentErrorService as PaymentErrorServiceInterface;

class PaymentErrorServiceImpl extends BasePaymentErrorService implements PaymentErrorServiceInterface
{
    public function __construct(TransactionService $transactionService)
    {
        parent::__construct($transactionService);
    }
}