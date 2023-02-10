<?php

/**
 * PHP Version 8.1
 * SendAdminEmailMessageHandler.
 *
 * @category MessageHandler
 * @package  Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter/blob/master/Messenger/MessageHandler/SendAdminEmailMessageHandler.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter
 */

namespace App\MessageHandler;

use App\Mapper\TransactionMapper;
use App\Service\NotificationService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler\SendAdminEmailMessageHandler as BaseSendAdminEmailMessageHandler;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

/**
 * SendAdminEmailMessageHandler.
 *
 * @category MessageHandler
 * @package  Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter/blob/master/Messenger/MessageHandler/SendAdminEmailMessageHandler.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter
 */
#[AsMessageHandler]
class SendAdminEmailMessageHandler extends BaseSendAdminEmailMessageHandler
{
    /**
     * Constructor.
     *
     * @param NotificationService $notificationService notificationService
     * @param TransactionMapper   $transactionMapper   transactionMapper
     *
     * @return void
     */
    public function __construct(NotificationService $notificationService, TransactionMapper $transactionMapper)
    {
        parent::__construct($notificationService, $transactionMapper);
    }
}