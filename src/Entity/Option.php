<?php

/**
 * PHP Version 8.1
 * Option.
 *
 * @category Entity
 * @package  App\Entity
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Entity/Option.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Entity;

use App\Repository\Impl\OptionRepositoryImpl;
use Doctrine\ORM\Mapping as ORM;
use Afrikpaysas\SymfonyThirdpartyAdapter\Entity\Option as BaseOption;

/**
 * Option.
 *
 * @category Entity
 * @package  App\Entity
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Entity/Option.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
#[ORM\Entity(repositoryClass: OptionRepositoryImpl::class)]
#[ORM\Table(name: 'referenceOption')]
class Option extends BaseOption
{
}
