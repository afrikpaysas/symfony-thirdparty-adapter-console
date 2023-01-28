<?php

/**
 * PHP Version 8.1
 * OptionFixtures.
 *
 * @category Fixtures
 * @package  App\Fixtures
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Fixtures/OptionFixtures.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Fixtures;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Fixtures\OptionFixtures as BaseOptionFixtures;
use App\Service\OptionService;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * OptionFixtures.
 *
 * @category Fixtures
 * @package  App\Fixtures
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Fixtures/OptionFixtures.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
class OptionFixtures extends Fixture
{
    use BaseOptionFixtures;

    /**
     * Constructor.
     *
     * @param OptionService   $optionService optionService
     * @param KernelInterface $kernel        kernel
     *
     * @return void
     */
    public function __construct(OptionService $optionService, KernelInterface $kernel)
    {
        $this->optionService = $optionService;
        $this->kernel = $kernel;
    }
}
