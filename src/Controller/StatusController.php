<?php

namespace App\Controller;

use Afrikpaysas\SymfonyThirdpartyAdapter\Controller\StatusController as BaseStatusController;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Controller\StatusController as StatusControllerInterface;
use App\Mapper\ReferenceMapper;
use App\Mapper\TransactionMapper;
use App\Service\PaymentService;
use App\Service\ReferenceService;
use App\Service\StatusService;
use FOS\RestBundle\Controller\Annotations\Route;

#[Route('/api/status')]
class StatusController extends BaseStatusController implements StatusControllerInterface
{
    public function __construct(PaymentService $paymentService, StatusService $statusService, ReferenceService $referenceService, TransactionMapper $transactionMapper, ReferenceMapper $referenceMapper)
    {
        parent::__construct($paymentService, $statusService, $referenceService, $transactionMapper, $referenceMapper);
    }
}