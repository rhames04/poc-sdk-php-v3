<?php

namespace MercadoPago\Net;

interface MPHttpClient
{
    public function send(MPRequest $request): MPResponse;
}
