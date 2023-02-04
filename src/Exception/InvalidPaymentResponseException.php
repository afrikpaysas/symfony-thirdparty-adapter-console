<?php

namespace App\Exception;

use Afrikpaysas\SymfonyThirdpartyAdapter\Lib\Exception\PaymentApplicationException;
use Afrikpaysas\SymfonyThirdpartyAdapter\Model\AppConstants;
use App\Model\SystemExceptionMessage;

class InvalidPaymentResponseException extends PaymentApplicationException
{
    public function __construct()
    {
        parent::__construct(
            SystemExceptionMessage::INVALID_PAYMENT_RESPONSE[AppConstants::API_CODE],
            SystemExceptionMessage::INVALID_PAYMENT_RESPONSE[AppConstants::API_DATA_MESSAGE]
        );
    }
}