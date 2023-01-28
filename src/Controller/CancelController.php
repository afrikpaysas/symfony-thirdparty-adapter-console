<?php

/**
 * PHP Version 8.1
 * CancelController.
 *
 * @category Controller
 * @package  App\Controller
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Controller/CancelController.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Controller;

use Afrikpaysas\SymfonyThirdpartyAdapter\Controller\CancelController as BaseCancelController;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Controller\CancelController as CancelControllerInterface;
use App\Mapper\ReferenceMapper;
use App\Mapper\TransactionMapper;
use App\Service\CancelService;
use App\Service\ReferenceService;
use FOS\RestBundle\Controller\Annotations\Route;

/**
 * CancelController.
 *
 * @category Controller
 * @package  App\Controller
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Controller/CancelController.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
#[Route('/api/cancel')]
class CancelController extends BaseCancelController implements CancelControllerInterface
{
    /**
     * Constructor.
     *
     * @param CancelService     $cancelService     cancelService
     * @param ReferenceService  $referenceService  referenceService
     * @param TransactionMapper $transactionMapper transactionMapper
     * @param ReferenceMapper   $referenceMapper   referenceMapper
     *
     * @return void
     */
    public function __construct(
        CancelService $cancelService,
        ReferenceService $referenceService,
        TransactionMapper $transactionMapper,
        ReferenceMapper $referenceMapper
    ) {
        parent::__construct(
            $cancelService,
            $referenceService,
            $transactionMapper,
            $referenceMapper
        );
    }
}
