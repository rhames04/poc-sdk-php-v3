<?php

namespace MercadoPago\Client\Payment;

class PaymentPayerRequest {

    public string $email;

    public function __construct(string $email) {
        $this->email = $email;
    }
}