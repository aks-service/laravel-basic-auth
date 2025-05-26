<?php

namespace AksService\LaravelBasicAuth\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AksService\LaravelBasicAuth\LaravelBasicAuth
 */
class LaravelBasicAuth extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AksService\LaravelBasicAuth\LaravelBasicAuth::class;
    }
}
