<?php

/**
 * PHP Version 8.1
 * VerifyController.
 *
 * @category Controller
 * @package  App\Controller
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Controller/VerifyController.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Controller;

use Afrikpaysas\SymfonyThirdpartyAdapter\Controller\VerifyController as BaseVerifyController;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Controller\VerifyController as VerifyControllerInterface;
use App\Service\VerifyService;
use FOS\RestBundle\Controller\Annotations\Route;

/**
 * VerifyController.
 *
 * @category Controller
 * @package  App\Controller
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Controller/VerifyController.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
#[Route('/api/verify')]
class VerifyController extends BaseVerifyController implements VerifyControllerInterface
{
    /**
     * Constructor.
     *
     * @param VerifyService $verifyService verifyService
     *
     * @return void
     */
    public function __construct(VerifyService $verifyService)
    {
        parent::__construct($verifyService);
    }
}
