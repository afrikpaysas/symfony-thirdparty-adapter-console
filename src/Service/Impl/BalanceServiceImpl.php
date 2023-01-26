<?php

namespace App\Service\Impl;

use App\Service\ParameterService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\BalanceService as BaseBalanceService;
use App\Service\BalanceService as BalanceServiceInterface;

class BalanceServiceImpl extends BaseBalanceService implements BalanceServiceInterface
{
    public function __construct(ParameterService $parameterService)
    {
        parent::__construct($parameterService);
    }
}