<?php

/**
 * PHP Version 8.1
 * ParameterServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/ParameterServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use Afrikpaysas\SymfonyThirdpartyAdapter\Service\ParameterService as BaseParameterService;
use App\Service\ParameterService as ParameterServiceInterface;
use App\Repository\ParameterRepository;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * ParameterServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/ParameterServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class ParameterServiceImpl extends BaseParameterService implements ParameterServiceInterface
{
    /**
     * Constructor.
     *
     * @param ParameterRepository   $parameterRepository parameterRepository
     * @param ParameterBagInterface $parameterBag        parameterBag
     *
     * @return void
     */
    public function __construct(
        ParameterRepository $parameterRepository,
        ParameterBagInterface $parameterBag
    ) {
        parent::__construct($parameterRepository, $parameterBag);
    }
}
