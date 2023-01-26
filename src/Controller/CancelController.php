<?php

namespace App\Controller;

use Afrikpaysas\SymfonyThirdpartyAdapter\Controller\CancelController as BaseCancelController;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Controller\CancelController as CancelControllerInterface;
use App\Mapper\ReferenceMapper;
use App\Mapper\TransactionMapper;
use App\Service\CancelService;
use App\Service\ReferenceService;
use FOS\RestBundle\Controller\Annotations\Route;

#[Route('/api/cancel')]
class CancelController extends BaseCancelController implements CancelControllerInterface
{
    public function __construct(CancelService $cancelService, ReferenceService $referenceService, TransactionMapper $transactionMapper, ReferenceMapper $referenceMapper)
    {
        parent::__construct($cancelService, $referenceService, $transactionMapper, $referenceMapper);
    }
}