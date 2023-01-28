<?php

/**
 * PHP Version 8.1
 * Transaction.
 *
 * @category Entity
 * @package  App\Entity
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Entity/Transaction.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 */

namespace App\Entity;

use App\Repository\Impl\TransactionRepositoryImpl;
use Doctrine\ORM\Mapping as ORM;
use Afrikpaysas\SymfonyThirdpartyAdapter\Entity\Transaction as BaseTransaction;

/**
 * Transaction.
 *
 * @category Entity
 * @package  App\Entity
 * @author   Willy DAMTCHOU <willy.damtchou@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/afrikpaysas/symfony-thirdparty-adapter-console/blob/master/Entity/Transaction.php
 *
 * @see https://github.com/afrikpaysas/symfony-thirdparty-adapter-console
 *
 * @psalm-suppress PropertyNotSetInConstructor
 */
#[ORM\Entity(repositoryClass: TransactionRepositoryImpl::class)]
class Transaction extends BaseTransaction
{
}
