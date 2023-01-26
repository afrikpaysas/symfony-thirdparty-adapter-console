<?php

namespace App\Service\Impl;

use App\Service\ParameterService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\HttpService as BaseHttpService;
use App\Service\HttpService as HttpServiceInterface;

class HttpServiceImpl extends BaseHttpService implements HttpServiceInterface
{
    public function __construct(ParameterService $parameterService)
    {
        parent::__construct($parameterService);
    }
}