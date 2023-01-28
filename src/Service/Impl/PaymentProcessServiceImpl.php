<?php

/**
 * PHP Version 8.1
 * PaymentProcessServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/PaymentProcessServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use App\Service\HttpService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\PaymentProcessService as BasePaymentProcessService;
use App\Service\PaymentProcessService as PaymentProcessServiceInterface;

/**
 * PaymentProcessServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/PaymentProcessServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class PaymentProcessServiceImpl extends BasePaymentProcessService implements PaymentProcessServiceInterface
{
    /**
     * Constructor.
     *
     * @param HttpService $httpService httpService
     *
     * @return void
     */
    public function __construct(HttpService $httpService)
    {
        parent::__construct($httpService);
    }
}
