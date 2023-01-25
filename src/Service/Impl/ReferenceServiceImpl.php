<?php

namespace App\Service\Impl;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Service\HttpService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Service\OptionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Mapper\ReferenceApiResponseMapper;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\ReferenceService as BaseReferenceService;
use App\Service\ReferenceService as ReferenceServiceInterface;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\VerifyService;
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