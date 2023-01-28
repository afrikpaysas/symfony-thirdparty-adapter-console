<?php

/**
 * PHP Version 8.1
 * OptionRepositoryImpl.
 *
 * @category Repository
 * @package  App\Repository\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Repository/Impl/OptionRepositoryImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Repository\Impl;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\OptionCollection;
use App\Entity\Option;
use App\Repository\OptionRepository;
use Afrikpaysas\SymfonyThirdpartyAdapter\Repository\OptionRepository as BaseOptionRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * OptionRepositoryImpl.
 *
 * @category Repository
 * @package  App\Repository\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Repository/Impl/OptionRepositoryImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class OptionRepositoryImpl extends BaseOptionRepository implements OptionRepository
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
        string $entityClass = Option::class,
        string $collectionClass = OptionCollection::class
    ) {
        parent::__construct($registry, $entityClass, $collectionClass);
    }
}
