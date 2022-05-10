<?php

namespace MercadoPago\Client\Payment;

use MercadoPago\Client\MercadoPagoClient;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Net\HttpMethod;
use MercadoPago\Net\MPRequest;
use MercadoPago\Resources\Payment\Payment;
use MercadoPago\Serialization\Serializer;

class PaymentClient extends MercadoPagoClient
{
    private static string $URL = "/v1/payments";

    private static string $URL_WITH_ID = "/v1/payments/%s";


    public function __construct()
    {
        parent::__construct(MercadoPagoConfig::getHttpClient());
    }

    public function create(PaymentCreateRequest $request): Payment
    {
        $mpRequest = new MPRequest(self::$URL, HttpMethod::POST->value, json_encode($request));
        $response = parent::send($mpRequest);
        $result = Serializer::deserializeFromJson(Payment::class, $response->getContent());
        $result->setResponse($response);
        return $result;
    }

    public function get(int $id): Payment
    {
        $mpRequest = new MPRequest(sprintf(self::$URL_WITH_ID, strval($id)), HttpMethod::GET->value, null);
        $response = parent::send($mpRequest);
        $result = Serializer::deserializeFromJson(Payment::class, $response->getContent());
        $result->setResponse($response);
        return $result;
    }

    public function cancel(int $id): Payment
    {
        $payload = new PaymentCancelRequest();
        $mpRequest = new MPRequest(sprintf(self::$URL_WITH_ID, strval($id)), HttpMethod::PUT->value, json_encode($payload));
        $response = parent::send($mpRequest);
        $result = Serializer::deserializeFromJson(Payment::class, $response->getContent());
        $result->setResponse($response);
        return $result;
    }
}
