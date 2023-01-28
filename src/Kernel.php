<?php

/**
 * PHP Version 8.1
 * Kernel.
 *
 * @category Kernel
 * @package  App
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Kernel.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;

/**
 * Kernel.
 *
 * @category Kernel
 * @package  App
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Kernel.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */
class Kernel extends BaseKernel
{
    use MicroKernelTrait;
}
