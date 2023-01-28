<?php

/**
 * PHP Version 8.1
 * PaymentServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/PaymentServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use App\Service\ReferenceService;
use App\Service\TransactionService;
use App\Service\NotificationService;
use App\Service\OptionService;
use App\Service\PaymentErrorService;
use App\Service\PaymentFailedService;
use App\Service\PaymentProcessService;
use App\Service\PaymentSuccessService;
use App\Service\PaymentVerifyService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\PaymentService as BasePaymentService;
use App\Service\PaymentService as PaymentServiceInterface;

/**
 * PaymentServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/PaymentServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress InvalidArgument
 */

class PaymentServiceImpl extends BasePaymentService implements PaymentServiceInterface
{
    /**
     * Constructor.
     *
     * @param TransactionService    $transactionService   transactionService
     * @param OptionService         $optionService        optionService
     * @param NotificationService   $notificationService  notificationService
     * @param ReferenceService      $referenceService     referenceService
     * @param PaymentSuccessService $paySucService        paySucService
     * @param PaymentErrorService   $paymentErrorService  paymentErrorService
     * @param PaymentFailedService  $paymentFailedService paymentFailedService
     * @param PaymentVerifyService  $paymentVerifyService paymentVerifyService
     * @param PaymentProcessService $payProcService       payProcService
     *
     * @return void
     */
    public function __construct(
        TransactionService $transactionService,
        OptionService $optionService,
        NotificationService $notificationService,
        ReferenceService $referenceService,
        PaymentSuccessService $paySucService,
        PaymentErrorService $paymentErrorService,
        PaymentFailedService $paymentFailedService,
        PaymentVerifyService $paymentVerifyService,
        PaymentProcessService $payProcService
    ) {
        parent::__construct(
            $transactionService,
            $optionService,
            $notificationService,
            $referenceService,
            $paySucService,
            $paymentErrorService,
            $paymentFailedService,
            $paymentVerifyService,
            $payProcService
        );
    }
}
