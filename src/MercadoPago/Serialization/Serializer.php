<?php

namespace MercadoPago\Serialization;

use Exception;
use MercadoPago\Net\MPResource;

class Serializer
{
    static function deserializeFromJson(mixed $entity, mixed $data): MPResource
    {
        $class = new $entity();
        foreach ($data as $key => $value) $class->{$key} = $value;
        return $class;
    }
}
