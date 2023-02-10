<?php

/**
 * PHP Version 8.1
 * SendClientEmailMessageHandler.
 *
 * @category MessageHandler
 * @package  Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter/blob/master/Messenger/MessageHandler/SendClientEmailMessageHandler.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter
 */

namespace App\MessageHandler;

use App\Mapper\TransactionMapper;
use App\Service\NotificationService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler\SendClientEmailMessageHandler as BaseSendClientEmailMessageHandler;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

/**
 * SendClientEmailMessageHandler.
 *
 * @category MessageHandler
 * @package  Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter/blob/master/Messenger/MessageHandler/SendClientEmailMessageHandler.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter
 */
#[AsMessageHandler]
class SendClientEmailMessageHandler extends BaseSendClientEmailMessageHandler
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