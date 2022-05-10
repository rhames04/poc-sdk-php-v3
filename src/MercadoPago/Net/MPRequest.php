<?php

namespace MercadoPago\Net;

use MercadoPago\MercadoPagoConfig;

class MPRequest
{
    private string $uri;

    private string $method;

    private array $headers;

    private ?string $payload;

    public function __construct(string $uri, string $method, ?string $payload)
    {
        $this->uri = $uri;
        $this->method = $method;
        $this->payload = $payload;
        $this->headers = array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . MercadoPagoConfig::getAccessToken()
        );
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getPayload(): ?string
    {
        return $this->payload;
    }
}
