<?php

namespace App\Controller;

use Afrikpaysas\SymfonyThirdpartyAdapter\Controller\ConfirmController as BaseConfirmController;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Controller\ConfirmController as ConfirmControllerInterface;
use App\Mapper\ReferenceMapper;
use App\Mapper\TransactionMapper;
use App\Service\ConfirmService;
use App\Service\ReferenceService;
use FOS\RestBundle\Controller\Annotations\Route;

#[Route('/api/confirm')]
class ConfirmController extends BaseConfirmController implements ConfirmControllerInterface
{
    public function __construct(ConfirmService $confirmService, ReferenceService $referenceService, TransactionMapper $transactionMapper, ReferenceMapper $referenceMapper)
    {
        parent::__construct($confirmService, $referenceService, $transactionMapper, $referenceMapper);
    }
}