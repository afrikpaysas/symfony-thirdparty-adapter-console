<?php

namespace App\Service\Impl;

use App\Service\HttpService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\PaymentProcessService as BasePaymentProcessService;
use App\Service\PaymentProcessService as PaymentProcessServiceInterface;

class PaymentProcessServiceImpl extends BasePaymentProcessService implements PaymentProcessServiceInterface
{
    public function __construct(HttpService $httpService)
    {
        parent::__construct($httpService);
    }
}