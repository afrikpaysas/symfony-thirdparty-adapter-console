<?php

namespace App\Dto;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Dto\ReferenceDTO as BaseReferenceDTO;

class ReferenceDTO extends BaseReferenceDTO
{
    public ?string $customerId;
    public ?string $billType;
    public ?string $ref4;
    public ?string $billId;
    public ?string $meterNumber;
    public ?string $billStatus;
    public ?string $billStatusDesc;
    public ?string $billTypeDesc;
    public ?string $agence;
}