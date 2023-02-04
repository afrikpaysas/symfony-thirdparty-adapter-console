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

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Dto\ProviderPaymentResponse as BaseProviderPaymentResponse;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Exception\PaymentAPIException;
use Afrikpaysas\SymfonyThirdpartyAdapter\Model\AppConstants;
use App\Dto\ProviderPaymentResponse;
use App\Model\ProviderPaymentResponse as ModelProviderPaymentResponse;
use App\Service\PaymentProcessService;
use App\Service\ReferenceService;
use App\Service\TransactionService;
use App\Service\OptionService;
use App\Service\PaymentErrorService;
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
     * @param ReferenceService      $referenceService     referenceService
     * @param PaymentErrorService   $paymentErrorService  paymentErrorService
     * @param PaymentVerifyService  $paymentVerifyService paymentVerifyService
     * @param PaymentProcessService $payProcService       payProcService
     *
     * @return void
     */
    public function __construct(
        TransactionService $transactionService,
        OptionService $optionService,
        ReferenceService $referenceService,
        PaymentErrorService $paymentErrorService,
        PaymentVerifyService $paymentVerifyService,
        PaymentProcessService $payProcService
    ) {
        parent::__construct(
            $transactionService,
            $optionService,
            $referenceService,
            $paymentErrorService,
            $paymentVerifyService,
            $payProcService
        );
    }
}
