<?php

namespace MercadoPago\Client\Payment;

class PaymentCreateRequest
{

    public string $description;

    public string $payment_method_id;
    
    public float $transaction_amount;

    public PaymentPayerRequest $payer;

    public function __construct(string $description, string $paymentMethodId, float $transactionAmout, string $payerEmail)
    {
        $this->description = $description;
        $this->payment_method_id = $paymentMethodId;
        $this->transaction_amount = $transactionAmout;
        $this->payer = new PaymentPayerRequest($payerEmail);
    }
}
