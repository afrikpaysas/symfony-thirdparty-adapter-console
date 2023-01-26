<?php

namespace App\Service\Impl;

use Afrikpaysas\SymfonyThirdpartyAdapter\Service\ParameterService as BaseParameterService;
use App\Service\ParameterService as ParameterServiceInterface;
use App\Repository\ParameterRepository;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class ParameterServiceImpl extends BaseParameterService implements ParameterServiceInterface
{
    public function __construct(ParameterRepository $parameterRepository, ParameterBagInterface $parameterBag)
    {
        parent::__construct($parameterRepository, $parameterBag);
    }
}