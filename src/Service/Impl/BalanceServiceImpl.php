<?php

/**
 * PHP Version 8.1
 * BalanceServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/BalanceServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use App\Service\ParameterService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\BalanceService as BaseBalanceService;
use App\Service\BalanceService as BalanceServiceInterface;

/**
 * BalanceServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/BalanceServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class BalanceServiceImpl extends BaseBalanceService implements BalanceServiceInterface
{
    /**
     * Constructor.
     *
     * @param ParameterService $parameterService parameterService
     *
     * @return void
     */
    public function __construct(ParameterService $parameterService)
    {
        parent::__construct($parameterService);
    }
}
