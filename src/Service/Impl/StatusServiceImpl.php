<?php

/**
 * PHP Version 8.1
 * StatusServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/StatusServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use App\Mapper\ReferenceMapper;
use App\Mapper\TransactionMapper;
use App\Service\ReferenceService;
use App\Service\TransactionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\StatusService as BaseStatusService;
use App\Service\StatusService as StatusServiceInterface;

/**
 * StatusServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/StatusServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class StatusServiceImpl extends BaseStatusService implements StatusServiceInterface
{
    /**
     * Constructor.
     *
     * @param TransactionService $transactionService transactionService
     * @param ReferenceService   $referenceService   referenceService
     * @param ReferenceMapper    $referenceMapper    referenceMapper
     * @param TransactionMapper  $transactionMapper  transactionMapper
     *
     * @return void
     */
    public function __construct(
        TransactionService $transactionService,
        ReferenceService $referenceService,
        ReferenceMapper $referenceMapper,
        TransactionMapper $transactionMapper
    ) {
        parent::__construct(
            $transactionService,
            $referenceService,
            $referenceMapper,
            $transactionMapper
        );
    }
}
