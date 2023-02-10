<?php

/**
 * PHP Version 8.1
 * UpdateProviderIdMessageHandler.
 *
 * @category MessageHandler
 * @package  Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter/blob/master/Messenger/MessageHandler/UpdateProviderIdMessageHandler.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter
 */

namespace App\MessageHandler;

use Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler\UpdateProviderIdMessageHandler as BaseUpdateProviderIdMessageHandler;
use App\Service\TransactionService;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

/**
 * UpdateProviderIdMessageHandler.
 *
 * @category MessageHandler
 * @package  Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter/blob/master/Messenger/MessageHandler/UpdateProviderIdMessageHandler.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter
 */
#[AsMessageHandler]
class UpdateProviderIdMessageHandler extends BaseUpdateProviderIdMessageHandler
{
    public function __construct(TransactionService $transactionService)
    {
        parent::__construct($transactionService);
    }
}