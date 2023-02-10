<?php

/**
 * PHP Version 8.1
 * UpdateReferenceStatusMessage.
 *
 * @category MessageHandler
 * @package  Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter/blob/master/Messenger/MessageHandler/UpdateReferenceStatusMessage.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter
 */

namespace App\MessageHandler;

use Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler\UpdateReferenceStatusMessageHandler as BaseUpdateReferenceStatusMessageHandler;
use App\Service\ReferenceService;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

/**
 * UpdateReferenceStatusMessage.
 *
 * @category MessageHandler
 * @package  Afrikpaysas\SymfonyThirdpartyAdapter\Messenger\MessageHandler
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter/blob/master/Messenger/MessageHandler/UpdateReferenceStatusMessage.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter
 */
#[AsMessageHandler]
class UpdateReferenceStatusMessageHandler extends BaseUpdateReferenceStatusMessageHandler
{
    public function __construct(ReferenceService $referenceService)
    {
        parent::__construct($referenceService);
    }
}