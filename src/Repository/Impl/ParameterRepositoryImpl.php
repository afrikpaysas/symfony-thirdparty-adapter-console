<?php

/**
 * PHP Version 8.1
 * ParameterRepositoryImpl.
 *
 * @category Repository
 * @package  App\Repository\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Repository/Impl/ParameterRepositoryImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Repository\Impl;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\ParameterCollection;
use App\Entity\Parameter;
use App\Repository\ParameterRepository;
use Afrikpaysas\SymfonyThirdpartyAdapter\Repository\ParameterRepository as BaseParameterRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * ParameterRepositoryImpl.
 *
 * @category Repository
 * @package  App\Repository\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Repository/Impl/ParameterRepositoryImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class ParameterRepositoryImpl extends BaseParameterRepository implements ParameterRepository
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
        string $entityClass = Parameter::class,
        string $collectionClass = ParameterCollection::class
    ) {
        parent::__construct($registry, $entityClass, $collectionClass);
    }
}
