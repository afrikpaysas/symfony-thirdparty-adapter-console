<?php

/**
 * PHP Version 8.1
 * Parameter.
 *
 * @category Entity
 * @package  App\Entity
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Entity/Parameter.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Entity;

use App\Repository\Impl\ParameterRepositoryImpl;
use Doctrine\ORM\Mapping as ORM;
use Afrikpaysas\SymfonyThirdpartyAdapter\Entity\Parameter as BaseParameter;

/**
 * PHP Version 8.1
 * Parameter.
 *
 * @category Entity
 * @package  App\Entity
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Entity/Parameter.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
#[ORM\Entity(repositoryClass: ParameterRepositoryImpl::class)]
class Parameter extends BaseParameter
{
}
