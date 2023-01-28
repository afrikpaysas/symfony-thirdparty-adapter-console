<?php

/**
 * PHP Version 8.1
 * TransactionMapperImpl.
 *
 * @category Mapper
 * @package  App\Mapper\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Mapper/Impl/TransactionMapperImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Mapper\Impl;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Dto\TransactionDTO;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\TransactionCollection;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\TransactionDTOCollection;
use App\Entity\Transaction;
use App\Mapper\TransactionMapper;
use Afrikpaysas\SymfonyThirdpartyAdapter\Mapper\TransactionMapper as BaseTransactionMapper;

/**
 * PHP Version 8.1
 * TransactionMapperImpl.
 *
 * @category Mapper
 * @package  App\Mapper\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Mapper/Impl/TransactionMapperImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class TransactionMapperImpl extends BaseTransactionMapper implements TransactionMapper
{
    /**
     * Constructor.
     *
     * @param string $entityClass   entityClass
     * @param string $dtoClass      dtoClass
     * @param string $entitiesClass entitiesClass
     * @param string $dtosClass     dtosClass
     *
     * @return void
     */
    public function __construct(
        string $entityClass = Transaction::class,
        string $dtoClass = TransactionDTO::class,
        string $entitiesClass = TransactionCollection::class,
        string $dtosClass = TransactionDTOCollection::class
    ) {
        parent::__construct($entityClass, $dtoClass, $entitiesClass, $dtosClass);
    }
}
