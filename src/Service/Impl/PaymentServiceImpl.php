<?php

namespace App\Service\Impl;

use App\Service\ReferenceService;
use App\Service\TransactionService;
use App\Service\NotificationService;
use App\Service\OptionService;
use App\Service\PaymentErrorService;
use App\Service\PaymentFailedService;
use App\Service\PaymentProcessService;
use App\Service\PaymentSuccessService;
use App\Service\PaymentVerifyService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\PaymentService as BasePaymentService;
use App\Service\PaymentService as PaymentServiceInterface;

class PaymentServiceImpl extends BasePaymentService implements PaymentServiceInterface
{
    public function __construct(TransactionService $transactionService, OptionService $optionService, NotificationService $notificationService, ReferenceService $referenceService, PaymentSuccessService $paySucService, PaymentErrorService $paymentErrorService, PaymentFailedService $paymentFailedService, PaymentVerifyService $paymentVerifyService, PaymentProcessService $payProcService)
    {
        parent::__construct($transactionService, $optionService, $notificationService, $referenceService, $paySucService, $paymentErrorService, $paymentFailedService, $paymentVerifyService, $payProcService);
    }
}