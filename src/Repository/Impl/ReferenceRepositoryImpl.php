<?php

/**
 * PHP Version 8.1
 * ReferenceRepositoryImpl.
 *
 * @category Repository
 * @package  App\Repository\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Repository/Impl/ReferenceRepositoryImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Repository\Impl;

use App\Entity\Reference;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\ReferenceCollection;
use App\Repository\ReferenceRepository;
use Afrikpaysas\SymfonyThirdpartyAdapter\Repository\ReferenceRepository as BaseReferenceRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * ReferenceRepositoryImpl.
 *
 * @category Repository
 * @package  App\Repository\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Repository/Impl/ReferenceRepositoryImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class ReferenceRepositoryImpl extends BaseReferenceRepository implements ReferenceRepository
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
        string $entityClass = Reference::class,
        string $collectionClass = ReferenceCollection::class
    ) {
        parent::__construct($registry, $entityClass, $collectionClass);
    }
}
