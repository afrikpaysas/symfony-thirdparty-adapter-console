<?php

/**
 * PHP Version 8.1
 * VerifyServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/VerifyServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use App\Service\OptionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\VerifyService as BaseVerifyService;
use App\Service\VerifyService as VerifyServiceInterface;

/**
 * VerifyServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/VerifyServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress InvalidArgument
 */
class VerifyServiceImpl extends BaseVerifyService implements VerifyServiceInterface
{
    /**
     * Constructor.
     *
     * @param OptionService $optionService optionService
     *
     * @return void
     */
    public function __construct(OptionService $optionService)
    {
        parent::__construct($optionService);
    }
}
