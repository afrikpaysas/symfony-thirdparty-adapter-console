<?php

namespace App\Service\Impl;

use App\Mapper\OptionRequestMapper;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\OptionService as BaseOptionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\UtilService;
use App\Service\OptionService as OptionServiceInterface;
use App\Repository\OptionRepository;

class OptionServiceImpl extends BaseOptionService implements OptionServiceInterface
{
    public function __construct(OptionRepository $optionRepository, UtilService $utilService, OptionRequestMapper $optionRequestMapper)
    {
        parent::__construct($optionRepository, $utilService, $optionRequestMapper);
    }
}