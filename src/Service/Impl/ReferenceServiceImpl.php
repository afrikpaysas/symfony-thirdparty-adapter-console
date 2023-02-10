<?php

/**
 * PHP Version 8.1
 * ReferenceServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/ReferenceServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Exception\ReferenceNotFoundException;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\UtilService;
use App\Model\BaseReferenceApiResponseCollection;
use App\Dto\ReferenceApiResponse;
use App\Service\HttpService;
use App\Service\OptionService;
use App\Mapper\ReferenceApiResponseMapper;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\ReferenceService as BaseReferenceService;
use App\Service\ReferenceService as ReferenceServiceInterface;
use App\Service\VerifyService;
use App\Repository\ReferenceRepository;

/**
 * ReferenceServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/ReferenceServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress InvalidArgument
 */
class ReferenceServiceImpl extends BaseReferenceService implements ReferenceServiceInterface
{
    protected UtilService $utilService;

    /**
     * Constructor.
     *
     * @param ReferenceRepository        $referenceRepository referenceRepository
     * @param OptionService              $optionService       optionService
     * @param HttpService                $httpService         httpService
     * @param VerifyService              $verifyService       verifyService
     * @param ReferenceApiResponseMapper $referenceApiMapper  referenceApiMapper
     *
     * @return void
     */
    public function __construct(
        ReferenceRepository $referenceRepository,
        OptionService $optionService,
        HttpService $httpService,
        VerifyService $verifyService,
        ReferenceApiResponseMapper $referenceApiMapper,
        UtilService $utilService
    ) {
        $this->utilService = $utilService;

        parent::__construct(
            $referenceRepository,
            $optionService,
            $httpService,
            $verifyService,
            $referenceApiMapper
        );
    }

    /*
    public function generateReferenceResponse(string $referenceNumber, ?array $data): ReferenceApiResponse
    {
        return parent::generateReferenceResponse($referenceNumber, $data);
    }
    */
}
