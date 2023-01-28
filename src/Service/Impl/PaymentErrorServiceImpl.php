<?php

/**
 * PHP Version 8.1
 * PaymentErrorServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/PaymentErrorServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use App\Service\TransactionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\PaymentErrorService as BasePaymentErrorService;
use App\Service\PaymentErrorService as PaymentErrorServiceInterface;

/**
 * PaymentErrorServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/PaymentErrorServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class PaymentErrorServiceImpl extends BasePaymentErrorService implements PaymentErrorServiceInterface
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
