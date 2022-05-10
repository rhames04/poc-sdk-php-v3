<?php

namespace MercadoPago\Net;

class MPResponse
{
    
    private int $statusCode;

    private mixed $content;

    public function __construct(int $statusCode, mixed $content)
    {
        $this->statusCode = $statusCode;
        $this->content = $content;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function getContent(): mixed
    {
        return $this->content;
    }
}
