<?php

namespace App\Dto;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Dto\ProviderResponse as BaseProviderResponse;
use App\Model\ProviderPaymentResponse as ModelProviderPaymentResponse;

class ProviderResponse extends BaseProviderResponse
{
    public ?string $message = null;
    public ?string $transactionStatus = null;

    public static function generateProviderResponse (
        ModelProviderPaymentResponse $data
    ): ProviderResponse {
        $response = new ProviderResponse();

        $response->providerStatus = "{$data->code}";
        $response->providerMessage = $data->message;

        if ($data->data) {
            $response->providerId = $data->data->transactionId;
            $response->transactionStatus = $data->data->status;
            $response->message = $data->data->message;
        }

        return $response;
    }
}
