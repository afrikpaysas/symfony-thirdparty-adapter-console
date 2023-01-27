<?php

namespace App\Fixtures;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Fixtures\OptionFixtures as BaseOptionFixtures;
use App\Service\OptionService;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\HttpKernel\KernelInterface;

class OptionFixtures extends Fixture
{
    use BaseOptionFixtures;

    public function __construct(OptionService $optionService, KernelInterface $kernel)
    {
        $this->optionService = $optionService;
        $this->kernel = $kernel;
    }
}