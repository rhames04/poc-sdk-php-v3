<?php

namespace MercadoPago;

use MercadoPago\Net\MPDefaultHttpClient;
use MercadoPago\Net\MPHttpClient;

class MercadoPagoConfig
{

    public static string $CURRENT_VERSION = "3.0.0.";

    public static string $BASE_URL = "https://api.mercadopago.com";

    private static string $accessToken;

    private static string $platformId;

    private static string $corporationId;

    private static string $integratorId;

    private static int $maxConnections = 10;

    private static int $connectionTimeout = 20000;

    private static int $connectionRequestTimeout = 20000;

    private static int $socketTimeout = 20000;

    private static MPHttpClient $httpClient;

    public static function getHttpClient(): MPHttpClient
    {
        self::$httpClient = new MPDefaultHttpClient();
        return self::$httpClient;
    }

    public static function setHttpClient(MPHttpClient $httpClient): void
    {
        self::$httpClient = $httpClient;
    }

    public static function getAccessToken(): string
    {
        return self::$accessToken;
    }

    public static function setAccessToken(string $accessToken): void
    {
        self::$accessToken = $accessToken;
    }

    public static function getPlatformId(): string
    {
        return self::$platformId;
    }

    public static function setPlatformId(string $platformId): void
    {
        self::$platformId = $platformId;
    }

    public static function getCorporationId(): string
    {
        return self::$corporationId;
    }

    public static function setCorporationId(string $corporationId): void
    {
        self::$corporationId = $corporationId;
    }

    public static function getIntegratorId(): string
    {
        return self::$integratorId;
    }

    public static function setIntegratorId(string $integratorId): void
    {
        self::$integratorId = $integratorId;
    }

    public static function getMaxConnections(): int
    {
        return self::$maxConnections;
    }

    public static function setMaxConnections(int $maxConnections): void
    {
        self::$maxConnections = $maxConnections;
    }

    public static function getConnectionTimeout(): int
    {
        return self::$connectionTimeout;
    }

    public static function setConnectionTimeout(int $connectionTimeout): void
    {
        self::$connectionTimeout = $connectionTimeout;
    }

    public static function getConnectionRequestTimeout(): int
    {
        return self::$connectionRequestTimeout;
    }

    public static function setConnectionRequestTimeout(int $connectionRequestTimeout): void
    {
        self::$connectionRequestTimeout = $connectionRequestTimeout;
    }

    public static function getSocketTimeout(): int
    {
        return self::$socketTimeout;
    }

    public static function setSocketTimeout(int $socketTimeout): void
    {
        self::$socketTimeout = $socketTimeout;
    }
}
