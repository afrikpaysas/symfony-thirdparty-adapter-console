<?php

/**
 * PHP Version 8.1
 * CallbackMessageHandler.
 *
 * @category MessageHandler
 * @package  Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter/blob/master/Messenger/MessageHandler/CallbackMessageHandler.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter
 */

namespace App\MessageHandler;

use Afrikpaysas\SymfonyThirdpartyAdapter\Mapper\TransactionMapper;
use App\Service\CallbackNotificationService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler\CallbackMessageHandler as BaseCallbackMessageHandler;
use App\Service\ReferenceService;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

/**
 * CallbackMessageHandler.
 *
 * @category MessageHandler
 * @package  Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter/blob/master/Messenger/MessageHandler/CallbackMessageHandler.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter
 */
#[AsMessageHandler]
class CallbackMessageHandler extends BaseCallbackMessageHandler
{
    /**
     * Constructor.
     *
     * @param CallbackNotificationService $callbackNotificationService callbackNotificationService
     * @param TransactionMapper           $transactionMapper           transactionMapper
     * @param ReferenceService            $referenceService            referenceService
     *
     * @return void
     */
    public function __construct(
        CallbackNotificationService $callbackNotificationService,
        TransactionMapper $transactionMapper,
        ReferenceService $referenceService
    ) {
        parent::__construct($callbackNotificationService, $transactionMapper, $referenceService);
    }
}