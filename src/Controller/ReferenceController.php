<?php

/**
 * PHP Version 8.1
 * ReferenceController.
 *
 * @category Controller
 * @package  App\Controller
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Controller/ReferenceController.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Controller;

use Afrikpaysas\SymfonyThirdpartyAdapter\Controller\ReferenceController as BaseReferenceController;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Controller\ReferenceController as ReferenceControllerInterface;
use App\Mapper\OptionMapper;
use App\Mapper\ReferenceMapper;
use App\Service\OptionService;
use App\Service\ReferenceService;
use FOS\RestBundle\Controller\Annotations\Route;

/**
 * ReferenceController.
 *
 * @category Controller
 * @package  App\Controller
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Controller/ReferenceController.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
#[Route('/api/reference')]
class ReferenceController extends BaseReferenceController implements ReferenceControllerInterface
{
    /**
     * Constructor.
     *
     * @param OptionService    $optionService    optionService
     * @param ReferenceService $referenceService referenceService
     * @param ReferenceMapper  $referenceMapper  referenceMapper
     * @param OptionMapper     $optionMapper     optionMapper
     *
     * @return void
     */
    public function __construct(
        OptionService $optionService,
        ReferenceService $referenceService,
        ReferenceMapper $referenceMapper,
        OptionMapper $optionMapper
    ) {
        parent::__construct(
            $optionService,
            $referenceService,
            $referenceMapper,
            $optionMapper
        );
    }
}
