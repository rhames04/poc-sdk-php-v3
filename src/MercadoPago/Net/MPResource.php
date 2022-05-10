<?php

namespace MercadoPago\Net;

class MPResource
{
    private MPResponse $response;

    function setResponse(MPResponse $response): void
    {
        $this->response = $response;
    }

    function getResponse(): MPResponse
    {
        return $this->response;
    }
}
