<?php

namespace App\Controller;

use Afrikpaysas\SymfonyThirdpartyAdapter\Controller\ReferenceController as BaseReferenceController;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Controller\ReferenceController as ReferenceControllerInterface;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Mapper\OptionMapper;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Mapper\ReferenceMapper;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Service\OptionService;
use App\Service\ReferenceService;
use FOS\RestBundle\Controller\Annotations\Route;

#[Route('/api/reference')]
class ReferenceController extends BaseReferenceController implements ReferenceControllerInterface
{
    public function __construct(OptionService $optionService, ReferenceService $referenceService, ReferenceMapper $referenceMapper, OptionMapper $optionMapper)
    {
        parent::__construct($optionService, $referenceService, $referenceMapper, $optionMapper);
    }
}