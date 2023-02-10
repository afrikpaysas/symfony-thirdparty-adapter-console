<?php

/**
 * PHP Version 8.1
 * PaymentSuccessServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/PaymentSuccessServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use App\Mapper\FullTransactionMapper;
use App\Service\ReferenceService;
use App\Service\TransactionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\PaymentSuccessService as BasePaymentSuccessService;
use App\Service\PaymentSuccessService as PaymentSuccessServiceInterface;
use Symfony\Component\Messenger\MessageBusInterface;

/**
 * PaymentSuccessServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/PaymentSuccessServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class PaymentSuccessServiceImpl extends BasePaymentSuccessService implements PaymentSuccessServiceInterface
{
    /**
     * Constructor.
     *
     * @param TransactionService    $transactionService    transactionService
     * @param ReferenceService      $referenceService      referenceService
     * @param MessageBusInterface   $bus                   bus
     * @param FullTransactionMapper $fullTransactionMapper fullTransactionMapper
     *
     * @return void
     */
    public function __construct(
        TransactionService $transactionService,
        ReferenceService $referenceService,
        MessageBusInterface $bus,
        FullTransactionMapper $fullTransactionMapper
    ) {
        parent::__construct($transactionService, $referenceService, $bus, $fullTransactionMapper);
    }
}
