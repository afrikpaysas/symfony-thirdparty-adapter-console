<?php

/**
 * PHP Version 8.1
 * PaymentVerifyServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/PaymentVerifyServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use App\Service\TransactionService;
use App\Service\VerifyService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\PaymentVerifyService as BasePaymentVerifyService;
use App\Service\PaymentVerifyService as PaymentVerifyServiceInterface;

/**
 * PHP Version 8.1
 * PaymentVerifyServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/PaymentVerifyServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class PaymentVerifyServiceImpl extends BasePaymentVerifyService implements PaymentVerifyServiceInterface
{
    /**
     * Constructor.
     *
     * @param TransactionService $transactionService transactionService
     * @param VerifyService      $verifyService      verifyService
     *
     * @return void
     */
    public function __construct(
        TransactionService $transactionService,
        VerifyService $verifyService
    ) {
        parent::__construct($transactionService, $verifyService);
    }
}
