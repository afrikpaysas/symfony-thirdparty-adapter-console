<?php

namespace App\Controller;

use Afrikpaysas\SymfonyThirdpartyAdapter\Controller\OptionController as BaseOptionController;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Controller\OptionController as OptionControllerInterface;
use App\Mapper\OptionMapper;
use App\Service\OptionService;
use FOS\RestBundle\Controller\Annotations\Route;

#[Route('/api/option')]
class OptionController extends BaseOptionController implements OptionControllerInterface
{
    public function __construct(OptionService $optionService, OptionMapper $optionMapper)
    {
        parent::__construct($optionService, $optionMapper);
    }
}