<?php

/**
 * PHP Version 8.1
 * StatusController.
 *
 * @category Controller
 * @package  App\Controller
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Controller/StatusController.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Controller;

use Afrikpaysas\SymfonyThirdpartyAdapter\Controller\StatusController as BaseStatusController;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Controller\StatusController as StatusControllerInterface;
use App\Mapper\ReferenceMapper;
use App\Mapper\TransactionMapper;
use App\Service\PaymentService;
use App\Service\ReferenceService;
use App\Service\StatusService;
use FOS\RestBundle\Controller\Annotations\Route;

/**
 * StatusController.
 *
 * @category Controller
 * @package  App\Controller
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Controller/StatusController.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
#[Route('/api/status')]
class StatusController extends BaseStatusController implements StatusControllerInterface
{
    /**
     * Constructor.
     *
     * @param PaymentService    $paymentService    paymentService
     * @param StatusService     $statusService     statusService
     * @param ReferenceService  $referenceService  referenceService
     * @param TransactionMapper $transactionMapper transactionMapper
     * @param ReferenceMapper   $referenceMapper   referenceMapper
     *
     * @return void
     */
    public function __construct(
        PaymentService $paymentService,
        StatusService $statusService,
        ReferenceService $referenceService,
        TransactionMapper $transactionMapper,
        ReferenceMapper $referenceMapper
    ) {
        parent::__construct(
            $paymentService,
            $statusService,
            $referenceService,
            $transactionMapper,
            $referenceMapper
        );
    }
}
