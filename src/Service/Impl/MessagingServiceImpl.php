<?php

namespace App\Service\Impl;

use App\Service\HttpService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\MessagingService as BaseMessagingService;
use App\Service\MessagingService as MessagingServiceInterface;

class MessagingServiceImpl extends BaseMessagingService implements MessagingServiceInterface
{
    public function __construct(HttpService $httpService)
    {
        parent::__construct($httpService);
    }
}