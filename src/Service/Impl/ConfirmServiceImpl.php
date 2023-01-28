<?php

/**
 * PHP Version 8.1
 * ConfirmServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/ConfirmServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use App\Service\PaymentVerifyService;
use App\Service\ReferenceService;
use App\Service\TransactionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\ConfirmService as BaseConfirmService;
use App\Service\ConfirmService as ConfirmServiceInterface;

/**
 * ConfirmServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/ConfirmServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class ConfirmServiceImpl extends BaseConfirmService implements ConfirmServiceInterface
{
    /**
     * Constructor.
     *
     * @param TransactionService   $transactionService   transactionService
     * @param ReferenceService     $referenceService     referenceService
     * @param PaymentVerifyService $paymentVerifyService paymentVerifyService
     *
     * @return void
     */
    public function __construct(
        TransactionService $transactionService,
        ReferenceService $referenceService,
        PaymentVerifyService $paymentVerifyService
    ) {
        parent::__construct($transactionService, $referenceService, $paymentVerifyService);
    }
}
