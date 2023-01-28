<?php

/**
 * PHP Version 8.1
 * OptionRequestMapperImpl.
 *
 * @category Mapper
 * @package  App\Mapper\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Mapper/Impl/OptionRequestMapperImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Mapper\Impl;

use App\Entity\Option;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Dto\OptionRequest;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\OptionCollection;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\OptionRequestCollection;
use Afrikpaysas\SymfonyThirdpartyAdapter\Mapper\OptionRequestMapper as BaseOptionRequestMapper;
use App\Mapper\OptionRequestMapper;

/**
 * OptionRequestMapperImpl.
 *
 * @category Mapper
 * @package  App\Mapper\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Mapper/Impl/OptionRequestMapperImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
class OptionRequestMapperImpl extends BaseOptionRequestMapper implements OptionRequestMapper
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
        string $entityClass = Option::class,
        string $dtoClass = OptionRequest::class,
        string $entitiesClass = OptionCollection::class,
        string $dtosClass = OptionRequestCollection::class
    ) {
        parent::__construct($entityClass, $dtoClass, $entitiesClass, $dtosClass);
    }
}
