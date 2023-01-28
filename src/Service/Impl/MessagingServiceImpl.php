<?php

/**
 * PHP Version 8.1
 * MessagingServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/MessagingServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use App\Service\HttpService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\MessagingService as BaseMessagingService;
use App\Service\MessagingService as MessagingServiceInterface;

/**
 * MessagingServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/MessagingServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress InvalidArgument
 */
class MessagingServiceImpl extends BaseMessagingService implements MessagingServiceInterface
{
    /**
     * Constructor.
     *
     * @param HttpService $httpService httpService
     *
     * @return void
     */
    public function __construct(HttpService $httpService)
    {
        parent::__construct($httpService);
    }
}
