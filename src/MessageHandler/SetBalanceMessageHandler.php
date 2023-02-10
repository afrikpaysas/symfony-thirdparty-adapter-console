<?php

/**
 * PHP Version 8.1
 * SetBalanceMessageHandler.
 *
 * @category MessageHandler
 * @package  Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter/blob/master/Messenger/MessageHandler/SetBalanceMessageHandler.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter
 */

namespace App\MessageHandler;

use Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler\SetBalanceMessageHandler as BaseSetBalanceMessageHandler;
use App\Mapper\TransactionMapper;
use App\Service\BalanceService;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

/**
 * SetBalanceMessageHandler.
 *
 * @category MessageHandler
 * @package  Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter/blob/master/Messenger/MessageHandler/SetBalanceMessageHandler.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter
 */
#[AsMessageHandler]
class SetBalanceMessageHandler extends BaseSetBalanceMessageHandler
{
    /**
     * Constructor.
     *
     * @param BalanceService    $balanceService    balanceService
     * @param TransactionMapper $transactionMapper transactionMapper
     *
     * @return void
     */
    public function __construct(BalanceService $balanceService, TransactionMapper $transactionMapper)
    {
        parent::__construct($balanceService, $transactionMapper);
    }
}