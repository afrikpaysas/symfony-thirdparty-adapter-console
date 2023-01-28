<?php

/**
 * PHP Version 8.1
 * TransactionRepositoryImpl.
 *
 * @category Repository
 * @package  App\Repository\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Repository/Impl/TransactionRepositoryImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Repository\Impl;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\TransactionCollection;
use App\Entity\Transaction;
use App\Repository\TransactionRepository;
use Afrikpaysas\SymfonyThirdpartyAdapter\Repository\TransactionRepository as BaseTransactionRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * TransactionRepositoryImpl.
 *
 * @category Repository
 * @package  App\Repository\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Repository/Impl/TransactionRepositoryImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class TransactionRepositoryImpl extends BaseTransactionRepository implements TransactionRepository
{
    /**
     * Constructor.
     *
     * @param ManagerRegistry $registry        registry
     * @param string          $entityClass     entityClass
     * @param string          $collectionClass collectionClass
     *
     * @return void
     */
    public function __construct(
        ManagerRegistry $registry,
        string $entityClass = Transaction::class,
        string $collectionClass = TransactionCollection::class
    ) {
        parent::__construct($registry, $entityClass, $collectionClass);
    }
}
