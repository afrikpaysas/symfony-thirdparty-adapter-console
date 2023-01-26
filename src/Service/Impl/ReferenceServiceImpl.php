<?php

namespace App\Service\Impl;

use App\Service\HttpService;
use App\Service\OptionService;
use App\Mapper\ReferenceApiResponseMapper;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\ReferenceService as BaseReferenceService;
use App\Service\ReferenceService as ReferenceServiceInterface;
use App\Service\VerifyService;
use App\Repository\ReferenceRepository;

class ReferenceServiceImpl extends BaseReferenceService implements ReferenceServiceInterface
{
    public function __construct(
        ReferenceRepository $referenceRepository,
        OptionService $optionService,
        HttpService $httpService,
        VerifyService $verifyService,
        ReferenceApiResponseMapper $referenceApiMapper
    ) {
        parent::__construct($referenceRepository, $optionService, $httpService, $verifyService, $referenceApiMapper);
    }
}