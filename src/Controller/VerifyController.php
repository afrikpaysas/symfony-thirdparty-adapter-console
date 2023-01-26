<?php

namespace App\Controller;

use Afrikpaysas\SymfonyThirdpartyAdapter\Controller\VerifyController as BaseVerifyController;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Controller\VerifyController as VerifyControllerInterface;
use App\Service\VerifyService;
use FOS\RestBundle\Controller\Annotations\Route;

#[Route('/api/verify')]
class VerifyController extends BaseVerifyController implements VerifyControllerInterface
{
    public function __construct(VerifyService $verifyService)
    {
        parent::__construct($verifyService);
    }
}