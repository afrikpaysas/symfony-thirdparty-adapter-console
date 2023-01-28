<?php

/**
 * PHP Version 8.1
 * NotificationServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/NotificationServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use App\Service\MessagingService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\NotificationService as BaseNotificationService;
use App\Service\NotificationService as NotificationServiceInterface;
use App\Service\ReferenceService;
use App\Service\VerifyService;

/**
 * NotificationServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/NotificationServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class NotificationServiceImpl extends BaseNotificationService implements NotificationServiceInterface
{
    /**
     * Constructor.
     *
     * @param MessagingService $messagingService messagingService
     * @param ReferenceService $referenceService referenceService
     * @param VerifyService    $verifyService    verifyService
     *
     * @return void
     */
    public function __construct(
        MessagingService $messagingService,
        ReferenceService $referenceService,
        VerifyService $verifyService
    ) {
        parent::__construct($messagingService, $referenceService, $verifyService);
    }
}
