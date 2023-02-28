<?php

namespace SaasLaravel\LaravelEnumsToJson\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SaasLaravel\LaravelEnumsToJson\LaravelEnumsToJson
 */
class LaravelEnumsToJson extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \SaasLaravel\LaravelEnumsToJson\LaravelEnumsToJson::class;
    }
}
