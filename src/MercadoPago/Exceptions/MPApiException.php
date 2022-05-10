<?php

namespace MercadoPago\Exceptions;

use Exception;
use MercadoPago\Net\MPResponse;

class MPApiException extends Exception
{
    private int $statusCode;

    private MPResponse $apiResponse;

    public function __construct(string $message, MPResponse $response)
    {
        parent::__construct($message, 0, null);
        $this->apiResponse = $response;
        $this->statusCode = $response->getStatusCode();
    }

    public function getApiResponse(): MPResponse
    {
        return $this->apiResponse;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
