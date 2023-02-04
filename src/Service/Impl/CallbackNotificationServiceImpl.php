<?php

/**
 * PHP Version 8.1
 * CallbackNotificationServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/CallbackNotificationServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Service\Impl;

use App\Mapper\ReferenceMapper;
use App\Mapper\TransactionMapper;
use App\Service\ReferenceService;
use App\Service\HttpService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\CallbackNotificationService as BaseCallbackNotificationService;
use App\Service\CallbackNotificationService as CallbackNotificationServiceInterface;

/**
 * CallbackNotificationServiceImpl.
 *
 * @category Service
 * @package  App\Service\Impl
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Service/Impl/CallbackNotificationServiceImpl.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class CallbackNotificationServiceImpl extends BaseCallbackNotificationService implements CallbackNotificationServiceInterface
{
    /**
     * Constructor.
     *
     * @param HttpService       $httpService       httpService
     * @param ReferenceMapper   $referenceMapper   referenceMapper
     * @param TransactionMapper $transactionMapper transactionMapper
     * @param ReferenceService  $referenceService  referenceService
     *
     * @return void
     */
    public function __construct(
        HttpService $httpService,
        ReferenceMapper $referenceMapper,
        TransactionMapper $transactionMapper,
        ReferenceService $referenceService
    ) {
        parent::__construct(
            $httpService,
            $referenceMapper,
            $transactionMapper,
            $referenceService
        );
    }
}
