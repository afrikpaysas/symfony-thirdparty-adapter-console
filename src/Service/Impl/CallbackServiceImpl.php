<?php

/**
 * PHP Version 8.1
 * CallbackServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/CallbackServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Dto\ProviderPaymentResponse;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Exception\PaymentAPIException;
use Afrikpaysas\SymfonyThirdpartyAdapter\Model\AppConstants;
use App\Model\ProviderPaymentResponse as ModelProviderPaymentResponse;
use App\Dto\ProviderResponse;
use App\Service\PaymentErrorService;
use App\Service\PaymentFailedService;
use App\Service\NotificationService;
use App\Service\PaymentProcessService;
use App\Service\PaymentSuccessService;
use App\Service\TransactionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\CallbackService as BaseCallbackService;
use App\Service\CallbackService as CallbackServiceInterface;

/**
 * CallbackServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/CallbackServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class CallbackServiceImpl extends BaseCallbackService implements CallbackServiceInterface
{
    /**
     * @param NotificationService   $notificationService  $notificationService
     * @param PaymentSuccessService $paySucService        $paySucService
     * @param PaymentProcessService $payProcService       $payProcService
     * @param TransactionService    $transactionService   $transactionService
     * @param PaymentFailedService  $paymentFailedService $paymentFailedService
     * @param PaymentErrorService   $paymentErrorService  $paymentErrorService
     */
    public function __construct(
        NotificationService $notificationService,
        PaymentSuccessService $paySucService,
        PaymentProcessService $payProcService,
        TransactionService $transactionService,
        PaymentFailedService $paymentFailedService,
        PaymentErrorService $paymentErrorService
    ) {
        parent::__construct(
            $notificationService,
            $paySucService,
            $payProcService,
            $transactionService,
            $paymentFailedService,
            $paymentErrorService
        );
    }
}
