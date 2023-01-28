<?php

/**
 * PHP Version 8.1
 * OptionController.
 *
 * @category Controller
 * @package  App\Controller
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Controller/OptionController.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Controller;

use Afrikpaysas\SymfonyThirdpartyAdapter\Controller\OptionController as BaseOptionController;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Controller\OptionController as OptionControllerInterface;
use App\Mapper\OptionMapper;
use App\Service\OptionService;
use FOS\RestBundle\Controller\Annotations\Route;

/**
 * OptionController.
 *
 * @category Controller
 * @package  App\Controller
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Controller/OptionController.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
#[Route('/api/option')]
class OptionController extends BaseOptionController implements OptionControllerInterface
{
    /**
     * Constructor.
     *
     * @param OptionService $optionService optionService
     * @param OptionMapper  $optionMapper  optionMapper
     *
     * @return void
     */
    public function __construct(OptionService $optionService, OptionMapper $optionMapper)
    {
        parent::__construct($optionService, $optionMapper);
    }
}
