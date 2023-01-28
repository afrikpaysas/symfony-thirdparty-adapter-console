<?php

/**
 * PHP Version 8.1
 * ConfirmController.
 *
 * @category Controller
 * @package  App\Controller
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Controller/ConfirmController.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Controller;

use Afrikpaysas\SymfonyThirdpartyAdapter\Controller\ConfirmController as BaseConfirmController;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Controller\ConfirmController as ConfirmControllerInterface;
use App\Mapper\ReferenceMapper;
use App\Mapper\TransactionMapper;
use App\Service\ConfirmService;
use App\Service\ReferenceService;
use FOS\RestBundle\Controller\Annotations\Route;

/**
 * ConfirmController.
 *
 * @category Controller
 * @package  App\Controller
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Controller/ConfirmController.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
#[Route('/api/confirm')]
class ConfirmController extends BaseConfirmController implements ConfirmControllerInterface
{
    /**
     * Constructor.
     *
     * @param ConfirmService    $confirmService    confirmService
     * @param ReferenceService  $referenceService  referenceService
     * @param TransactionMapper $transactionMapper transactionMapper
     * @param ReferenceMapper   $referenceMapper   referenceMapper
     *
     * @return void
     */
    public function __construct(
        ConfirmService $confirmService,
        ReferenceService $referenceService,
        TransactionMapper $transactionMapper,
        ReferenceMapper $referenceMapper
    ) {
        parent::__construct(
            $confirmService,
            $referenceService,
            $transactionMapper,
            $referenceMapper
        );
    }
}
