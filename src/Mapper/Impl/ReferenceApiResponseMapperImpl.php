<?php

/**
 * PHP Version 8.1
 * ReferenceApiResponseMapperImpl.
 *
 * @category Mapper
 * @package  App\Mapper\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Mapper/Impl/ReferenceApiResponseMapperImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Mapper\Impl;

use App\Entity\Reference;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Dto\ReferenceApiResponse;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\ReferenceApiResponseCollection;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\ReferenceCollection;
use Afrikpaysas\SymfonyThirdpartyAdapter\Mapper\ReferenceApiResponseMapper as BaseReferenceApiResponseMapper;
use App\Mapper\ReferenceApiResponseMapper;

/**
 * ReferenceApiResponseMapperImpl.
 *
 * @category Mapper
 * @package  App\Mapper\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Mapper/Impl/ReferenceApiResponseMapperImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ReferenceApiResponseMapperImpl extends BaseReferenceApiResponseMapper implements ReferenceApiResponseMapper
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
        string $entityClass = Reference::class,
        string $dtoClass = ReferenceApiResponse::class,
        string $entitiesClass = ReferenceCollection::class,
        string $dtosClass = ReferenceApiResponseCollection::class
    ) {
        parent::__construct($entityClass, $dtoClass, $entitiesClass, $dtosClass);
    }
}
