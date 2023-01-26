<?php

namespace App\Controller;

use Afrikpaysas\SymfonyThirdpartyAdapter\Controller\BalanceController as BaseBalanceController;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Controller\BalanceController as BalanceControllerInterface;
use App\Service\BalanceService;
use FOS\RestBundle\Controller\Annotations\Route;

#[Route('/api/balance')]
class BalanceController extends BaseBalanceController implements BalanceControllerInterface
{
    public function __construct(BalanceService $balanceService)
    {
        parent::__construct($balanceService);
    }
}