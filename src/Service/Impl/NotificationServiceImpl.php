<?php

namespace App\Service\Impl;

use App\Service\MessagingService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\NotificationService as BaseNotificationService;
use App\Service\NotificationService as NotificationServiceInterface;
use App\Service\ReferenceService;
use App\Service\VerifyService;

class NotificationServiceImpl extends BaseNotificationService implements NotificationServiceInterface
{
   public function __construct(MessagingService $messagingService, ReferenceService $referenceService, VerifyService $verifyService)
   {
       parent::__construct($messagingService, $referenceService, $verifyService);
   }
}