<?php

/**
 * PHP Version 8.1
 * SystemExceptionMessage.
 *
 * @category Model
 * @package  Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter/blob/master/Lib/Model/SystemExceptionMessage.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter
 */

namespace App\Model;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\AppConstants;

/**
 * SystemExceptionMessage.
 *
 * @category Model
 * @package  Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter/blob/master/Lib/Model/SystemExceptionMessage.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter
 */
final class SystemExceptionMessage
{
    public const INVALID_PAYMENT_RESPONSE = [
        AppConstants::CODE => '001',
        AppConstants::MESSAGE => 'Invalid payment response'
    ];
}
