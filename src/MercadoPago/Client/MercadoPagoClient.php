<?php

namespace MercadoPago\Client;

use MercadoPago\Net;
use MercadoPago\Net\MPHttpClient;
use MercadoPago\Net\MPRequest;
use MercadoPago\Net\MPResponse;

class MercadoPagoClient
{
    protected MPHttpClient $httpClient;

    public function __construct(MPHttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    protected function send(MPRequest $request): MPResponse
    {
        return $this->httpClient->send($request);
    }
}
