<?php

/**
 * PHP Version 8.1
 * OptionServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/OptionServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use App\Mapper\OptionRequestMapper;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\OptionService as BaseOptionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\UtilService;
use App\Service\OptionService as OptionServiceInterface;
use App\Repository\OptionRepository;

/**
 * OptionServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/OptionServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress InvalidArgument
 */
class OptionServiceImpl extends BaseOptionService implements OptionServiceInterface
{
    /**
     * Constructor.
     *
     * @param OptionRepository    $optionRepository    optionRepository
     * @param UtilService         $utilService         utilService
     * @param OptionRequestMapper $optionRequestMapper optionRequestMapper
     *
     * @return void
     */
    public function __construct(
        OptionRepository $optionRepository,
        UtilService $utilService,
        OptionRequestMapper $optionRequestMapper
    ) {
        parent::__construct($optionRepository, $utilService, $optionRequestMapper);
    }
}
