<?php

namespace App\Dto;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Dto\ProviderPaymentResponse as BaseProviderPaymentResponse;
use App\Model\ProviderPaymentResponse as ModelProviderPaymentResponse;

class ProviderPaymentResponse extends BaseProviderPaymentResponse
{
    public ?string $message = null;
    public ?string $transactionStatus = null;

    public static function generateProviderPaymentResponse(
        ModelProviderPaymentResponse $data
    ): ProviderPaymentResponse {
        $response = new ProviderPaymentResponse();

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
