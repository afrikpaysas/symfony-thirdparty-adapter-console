<?php

/**
 * PHP Version 8.1
 * CancelServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/CancelServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use App\Service\ReferenceService;
use App\Service\TransactionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\CancelService as BaseCancelService;
use App\Service\CancelService as CancelServiceInterface;

/**
 * CancelServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/CancelServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class CancelServiceImpl extends BaseCancelService implements CancelServiceInterface
{
    /**
     * Constructor.
     *
     * @param TransactionService $transactionService transactionService
     * @param ReferenceService   $referenceService   referenceService
     *
     * @return void
     */
    public function __construct(
        TransactionService $transactionService,
        ReferenceService $referenceService
    ) {
        parent::__construct($transactionService, $referenceService);
    }
}
