<?php

namespace App\DataFixtures;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Fixtures\OptionFixtures;
use App\Service\OptionService;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\HttpKernel\KernelInterface;

class AppFixtures extends Fixture
{
    use OptionFixtures;

    public function __construct(OptionService $optionService, KernelInterface $kernel)
    {
        $this->optionService = $optionService;
        $this->kernel = $kernel;
    }
}