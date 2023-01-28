<?php

/**
 * PHP Version 8.1
 * BalanceController.
 *
 * @category Controller
 * @package  App\Controller
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Controller/BalanceController.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Controller;

use Afrikpaysas\SymfonyThirdpartyAdapter\Controller\BalanceController as BaseBalanceController;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Controller\BalanceController as BalanceControllerInterface;
use App\Service\BalanceService;
use FOS\RestBundle\Controller\Annotations\Route;

/**
 * BalanceController.
 *
 * @category Controller
 * @package  App\Controller
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Controller/BalanceController.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
#[Route('/api/balance')]
class BalanceController extends BaseBalanceController implements BalanceControllerInterface
{
    /**
     * Constructor.
     *
     * @param BalanceService $balanceService balanceService
     *
     * @return void
     */
    public function __construct(BalanceService $balanceService)
    {
        parent::__construct($balanceService);
    }
}
