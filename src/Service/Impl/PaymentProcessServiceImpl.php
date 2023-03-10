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

use App\Mapper\FullTransactionMapper;
use App\Mapper\TransactionMapper;
use App\Service\ReferenceService;
use App\Service\CallbackNotificationService;
use App\Service\NotificationService;
use App\Service\PaymentFailedService;
use App\Service\PaymentSuccessService;
use App\Service\HttpService;
use App\Service\TransactionService;
use App\Service\PaymentErrorService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\PaymentProcessService as BasePaymentProcessService;
use App\Service\PaymentProcessService as PaymentProcessServiceInterface;
use Symfony\Component\Messenger\MessageBusInterface;

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
     * @param HttpService                 $httpService                 httpService
     * @param TransactionService          $transactionService          transactionService
     * @param PaymentSuccessService       $paySucService               paySucService
     * @param NotificationService         $notificationService         notificationService
     * @param CallbackNotificationService $callbackNotificationService callbackNotificationService
     * @param PaymentFailedService        $paymentFailedService        paymentFailedService
     * @param PaymentErrorService         $paymentErrorService         paymentErrorService
     * @param MessageBusInterface         $bus                         bus
     * @param ReferenceService            $referenceService            referenceService
     * @param TransactionMapper           $transactionMapper           transactionMapper
     * @param FullTransactionMapper       $fullTransactionMapper       fullTransactionMapper
     *
     * @return void
     */
    public function __construct(
        HttpService $httpService,
        TransactionService $transactionService,
        PaymentSuccessService $paySucService,
        NotificationService $notificationService,
        CallbackNotificationService $callbackNotificationService,
        PaymentFailedService $paymentFailedService,
        PaymentErrorService $paymentErrorService,
        MessageBusInterface $bus,
        ReferenceService $referenceService,
        TransactionMapper $transactionMapper,
        FullTransactionMapper $fullTransactionMapper
    ) {
        parent::__construct(
            $httpService,
            $transactionService,
            $paySucService,
            $notificationService,
            $callbackNotificationService,
            $paymentFailedService,
            $paymentErrorService,
            $bus,
            $referenceService,
            $transactionMapper,
            $fullTransactionMapper
        );
    }
}
