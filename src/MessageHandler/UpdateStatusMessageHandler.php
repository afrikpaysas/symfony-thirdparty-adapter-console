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

use App\Mapper\FullTransactionMapper;
use App\Service\TransactionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler\UpdateStatusMessageHandler as BaseUpdateStatusMessageHandler;
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
class UpdateStatusMessageHandler extends BaseUpdateStatusMessageHandler
{
    /**
     * Constructor.
     *
     * @param TransactionService    $transactionService    transactionService
     * @param FullTransactionMapper $fullTransactionMapper fullTransactionMapper
     *
     * @return void
     */
    public function __construct(
        TransactionService $transactionService,
        FullTransactionMapper $fullTransactionMapper
    ) {
        parent::__construct($transactionService, $fullTransactionMapper);
    }
}