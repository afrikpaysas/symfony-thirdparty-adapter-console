<?php

/**
 * PHP Version 8.1
 * ProviderPaymentResponseCollection.
 *
 * @category Model
 * @package  App\Model
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter/blob/master/Lib/Model/ProviderPaymentResponseCollection.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter
 */
namespace App\Model;

use App\Dto\ReferenceApiResponse;
use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model\Collection;

/**
 * ProviderPaymentResponseCollection.
 *
 * @template-extends Collection<ReferenceApiResponse>
 *
 * @category Model
 * @package  Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Model
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter/blob/master/Lib/Model/ProviderPaymentResponseCollection.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter
 */
class ProviderPaymentResponseCollection extends Collection
{
    /**
     * Constructor.
     *
     * @param object|array $array         array
     * @param string       $class         class
     * @param int          $flags         flags
     * @param string       $iteratorClass iteratorClass
     *
     * @return void
     */
    public function __construct(
        object|array $array = [],
        string $class = ProviderPaymentResponse::class,
        int $flags = 0,
        string $iteratorClass = 'ArrayIterator'
    ) {
        parent::__construct($array, $class, $flags, $iteratorClass);
    }
}
