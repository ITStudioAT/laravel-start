<?php

namespace Itstudio\LaravelStart\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Itstudio\LaravelStart\LaravelStart
 */
class LaravelStart extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Itstudio\LaravelStart\LaravelStart::class;
    }
}
