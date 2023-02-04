<?php

namespace App\Dto;

use \Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Dto\ReferenceApiResponse as BaseReferenceApiResponse;
use \App\Model\ReferenceApiResponse as ModelReferenceApiResponse;

class ReferenceApiResponse extends BaseReferenceApiResponse
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

    public static function generate(ModelReferenceApiResponse $response) : ReferenceApiResponse {
        $referenceApiResponse = new ReferenceApiResponse();

        foreach (get_object_vars($response) as $key => $value) {
            if (property_exists($referenceApiResponse, $key) && null != $value) {
                $referenceApiResponse->$key = $response->$key;
            }
        }

        $referenceApiResponse->name = "{$response->customerName}";
        $referenceApiResponse->amount = "{$response->billAmount}";
        $referenceApiResponse->expirationDate = "{$response->billDueDate}";
        $referenceApiResponse->generationDate = "{$response->billGenerationDate}";
        $referenceApiResponse->referenceNumber = "{$response->billNumber}";

        return $referenceApiResponse;
    }
}