<?php

/**
 * PHP Version 8.1
 * Reference.
 *
 * @category Entity
 * @package  App\Entity
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Entity/Reference.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Entity;

use App\Repository\Impl\ReferenceRepositoryImpl;
use Doctrine\ORM\Mapping as ORM;
use Afrikpaysas\SymfonyThirdpartyAdapter\Entity\Reference as BaseReference;

/**
 * Reference.
 *
 * @category Entity
 * @package  App\Entity
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Entity/Reference.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
#[ORM\Entity(repositoryClass: ReferenceRepositoryImpl::class)]
class Reference extends BaseReference
{
}
