<?php

/**
 * PHP Version 8.1
 * PaymentController.
 *
 * @category Controller
 * @package  App\Controller
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Controller/PaymentController.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Controller;

use Afrikpaysas\SymfonyThirdpartyAdapter\Controller\PaymentController as BasePaymentController;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Controller\PaymentController as PaymentControllerInterface;
use App\Mapper\ReferenceMapper;
use App\Mapper\TransactionMapper;
use App\Service\PaymentService;
use App\Service\ReferenceService;
use FOS\RestBundle\Controller\Annotations\Route;

/**
 * PaymentController.
 *
 * @category Controller
 * @package  App\Controller
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Controller/PaymentController.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
#[Route('/api/payment')]
class PaymentController extends BasePaymentController implements PaymentControllerInterface
{
    /**
     * Constructor.
     *
     * @param PaymentService    $paymentService    paymentService
     * @param ReferenceService  $referenceService  referenceService
     * @param TransactionMapper $transactionMapper transactionMapper
     * @param ReferenceMapper   $referenceMapper   referenceMapper
     *
     * @return void
     */
    public function __construct(
        PaymentService $paymentService,
        ReferenceService $referenceService,
        TransactionMapper $transactionMapper,
        ReferenceMapper $referenceMapper
    ) {
        parent::__construct(
            $paymentService,
            $referenceService,
            $transactionMapper,
            $referenceMapper
        );
    }
}
