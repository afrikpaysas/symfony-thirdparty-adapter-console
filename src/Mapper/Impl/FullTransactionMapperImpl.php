<?php

/**
 * PHP Version 8.1
 * FullTransactionMapperImpl.
 *
 * @category Mapper
 * @package  App\Mapper\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Mapper/Impl/FullTransactionMapperImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Mapper\Impl;

use App\Dto\FullTransactionDTO;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\TransactionCollection;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\FullTransactionDTOCollection;
use App\Entity\Transaction;
use App\Mapper\FullTransactionMapper;
use Afrikpaysas\SymfonyThirdpartyAdapter\Mapper\FullTransactionMapper as BaseFullTransactionMapper;

/**
 * PHP Version 8.1
 * FullTransactionMapperImpl.
 *
 * @category Mapper
 * @package  App\Mapper\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Mapper/Impl/FullTransactionMapperImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class FullTransactionMapperImpl extends BaseFullTransactionMapper implements FullTransactionMapper
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
        string $dtoClass = FullTransactionDTO::class,
        string $entitiesClass = TransactionCollection::class,
        string $dtosClass = FullTransactionDTOCollection::class
    ) {
        parent::__construct($entityClass, $dtoClass, $entitiesClass, $dtosClass);
    }
}
