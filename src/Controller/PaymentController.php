<?php

namespace App\Controller;

use Afrikpaysas\SymfonyThirdpartyAdapter\Controller\PaymentController as BasePaymentController;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Controller\PaymentController as PaymentControllerInterface;
use App\Mapper\ReferenceMapper;
use App\Mapper\TransactionMapper;
use App\Service\PaymentService;
use App\Service\ReferenceService;
use FOS\RestBundle\Controller\Annotations\Route;

#[Route('/api/payment')]
class PaymentController extends BasePaymentController implements PaymentControllerInterface
{
    public function __construct(PaymentService $paymentService, ReferenceService $referenceService, TransactionMapper $transactionMapper, ReferenceMapper $referenceMapper)
    {
        parent::__construct($paymentService, $referenceService, $transactionMapper, $referenceMapper);
    }
}