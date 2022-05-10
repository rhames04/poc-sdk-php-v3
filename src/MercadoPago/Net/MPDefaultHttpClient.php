<?php

namespace MercadoPago\Net;

use Exception;
use MercadoPago\Exceptions\MPApiException;
use MercadoPago\MercadoPagoConfig;

class MPDefaultHttpClient implements MPHttpClient
{
    public function send(MPRequest $request): MPResponse
    {
        $completeRequest = array(
            CURLOPT_URL => MercadoPagoConfig::$BASE_URL . $request->getUri(),
            CURLOPT_CUSTOMREQUEST => $request->getMethod(),
            CURLOPT_HTTPHEADER => $request->getHeaders(),
            CURLOPT_POSTFIELDS => $request->getPayload(),
            CURLOPT_RETURNTRANSFER => true
        );

        $connect = curl_init();
        curl_setopt_array($connect, $completeRequest);
        $apiResult = curl_exec($connect);
        $statusCode = curl_getinfo($connect, CURLINFO_HTTP_CODE);
        $content = json_decode($apiResult, true);
        $mpResponse = new MPResponse($statusCode, $content);

        if (curl_error($connect) || $apiResult === false) {
            throw new Exception(curl_error($connect));
        }

        curl_close($connect);

        if ($statusCode != "200" && $statusCode != "201") {
            throw new MPApiException("Api error. Check response for details", $mpResponse);
        }

        return $mpResponse;
    }
}
