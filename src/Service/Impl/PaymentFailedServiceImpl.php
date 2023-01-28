<?php

/**
 * PHP Version 8.1
 * PaymentFailedServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/PaymentFailedServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use App\Service\TransactionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\PaymentFailedService as BasePaymentFailedService;
use App\Service\PaymentFailedService as PaymentFailedServiceInterface;

/**
 * PaymentFailedServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/PaymentFailedServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class PaymentFailedServiceImpl extends BasePaymentFailedService implements PaymentFailedServiceInterface
{
    /**
     * Constructor.
     *
     * @param TransactionService $transactionService transactionService
     *
     * @return void
     */
    public function __construct(TransactionService $transactionService)
    {
        parent::__construct($transactionService);
    }
}
