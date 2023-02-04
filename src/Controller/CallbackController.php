<?php

/**
 * PHP Version 8.1
 * CallbackController.
 *
 * @category Controller
 * @package  App\Controller
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Controller/DecisionController.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Controller;

use Afrikpaysas\SymfonyThirdpartyAdapter\Controller\CallbackController as BaseCallbackController;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Controller\CallbackController as CallbackControllerInterface;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Service\CancelService;
use App\Mapper\ReferenceMapper;
use App\Mapper\TransactionMapper;
use App\Service\CallbackService;
use App\Service\ReferenceService;
use FOS\RestBundle\Controller\Annotations\Route;

/**
 * CallbackController.
 *
 * @category Controller
 * @package  App\Controller
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Controller/DecisionController.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
#[Route('/api/callback')]
class CallbackController extends BaseCallbackController implements CallbackControllerInterface
{
    public function __construct(
        CallbackService $callbackService,
        TransactionMapper $transactionMapper,
        ReferenceMapper $referenceMapper,
        ReferenceService $referenceService
    ) {
        parent::__construct(
            $callbackService,
            $transactionMapper,
            $referenceMapper,
            $referenceService
        );
    }
}
