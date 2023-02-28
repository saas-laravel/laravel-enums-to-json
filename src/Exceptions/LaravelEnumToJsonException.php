<?php

namespace SaasLaravel\LaravelEnumsToJson\Exceptions;

class LaravelEnumToJsonException extends \Exception
{

    public static function nameCollision(string $name)
    {
        return new self("There was a collision of names: $name");
    }

}
