<?php

/**
 * PHP Version 8.1
 * TransactionServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/TransactionServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use Afrikpaysas\SymfonyThirdpartyAdapter\Service\TransactionService as BaseTransactionService;
use App\Service\TransactionService as TransactionServiceInterface;
use App\Repository\TransactionRepository;

/**
 * TransactionServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/TransactionServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class TransactionServiceImpl extends BaseTransactionService implements TransactionServiceInterface
{
    /**
     * Constructor.
     *
     * @param TransactionRepository $transRepository transRepository
     *
     * @return void
     */
    public function __construct(TransactionRepository $transRepository)
    {
        parent::__construct($transRepository);
    }
}
