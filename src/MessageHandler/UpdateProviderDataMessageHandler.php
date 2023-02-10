<?php

/**
 * PHP Version 8.1
 * UpdateProviderDataMessageHandler.
 *
 * @category MessageHandler
 * @package  Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter/blob/master/Messenger/MessageHandler/UpdateProviderDataMessageHandler.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter
 */

namespace App\MessageHandler;

use Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler\UpdateProviderDataMessageHandler as BaseUpdateProviderDataMessageHandler;
use App\Mapper\FullTransactionMapper;
use App\Service\TransactionService;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

/**
 * UpdateProviderDataMessageHandler.
 *
 * @category MessageHandler
 * @package  Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter/blob/master/Messenger/MessageHandler/UpdateProviderDataMessageHandler.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter
 */
#[AsMessageHandler]
class UpdateProviderDataMessageHandler extends BaseUpdateProviderDataMessageHandler
{
    /**
     * Constructor.
     *
     * @param TransactionService    $transactionService    transactionService
     * @param FullTransactionMapper $fullTransactionMapper fullTransactionMapper
     *
     * @retun void
     */
    public function __construct(
        TransactionService $transactionService,
        FullTransactionMapper $fullTransactionMapper
    ) {
        parent::__construct($transactionService, $fullTransactionMapper);
    }
}