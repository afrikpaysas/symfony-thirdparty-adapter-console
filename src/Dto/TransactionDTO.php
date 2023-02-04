<?php

namespace App\Dto;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Dto\TransactionDTO as BaseTransactionDTO;

/**
 * @psalm-suppress MissingConstructor
 */
class TransactionDTO extends BaseTransactionDTO
{
    public ?string $message;
    public ?string $transactionStatus;
}
