<?php

/**
 * PHP Version 8.1
 * OptionMapperImpl.
 *
 * @category Mapper
 * @package  App\Mapper\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Mapper/Impl/OptionMapperImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Mapper\Impl;

use App\Entity\Option;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Dto\OptionDTO;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\OptionCollection;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\OptionDTOCollection;
use App\Mapper\OptionMapper;
use Afrikpaysas\SymfonyThirdpartyAdapter\Mapper\OptionMapper as BaseOptionMapper;

/**
 * OptionMapperImpl.
 *
 * @category Mapper
 * @package  App\Mapper\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Mapper/Impl/OptionMapperImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class OptionMapperImpl extends BaseOptionMapper implements OptionMapper
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
        string $dtoClass = OptionDTO::class,
        string $entitiesClass = OptionCollection::class,
        string $dtosClass = OptionDTOCollection::class
    ) {
        parent::__construct($entityClass, $dtoClass, $entitiesClass, $dtosClass);
    }
}
