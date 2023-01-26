<?php

namespace App\Service\Impl;

use App\Service\OptionService;
use Afrikpaysas\SymfonyThirdpartyAdapter\Service\VerifyService as BaseVerifyService;
use App\Service\VerifyService as VerifyServiceInterface;

class VerifyServiceImpl extends BaseVerifyService implements VerifyServiceInterface
{
   public function __construct(OptionService $optionService)
   {
       parent::__construct($optionService);
   }
}