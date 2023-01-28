<?php

/**
 * PHP Version 8.1
 * HttpServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/HttpServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use App\Service\ParameterService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\HttpService as BaseHttpService;
use App\Service\HttpService as HttpServiceInterface;

/**
 * HttpServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/HttpServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class HttpServiceImpl extends BaseHttpService implements HttpServiceInterface
{
    /**
     * Constructor.
     *
     * @param ParameterService $parameterService parameterService
     *
     * @return void
     */
    public function __construct(ParameterService $parameterService)
    {
        parent::__construct($parameterService);
    }
}
