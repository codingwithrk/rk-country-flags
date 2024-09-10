<?php

/**
 * @author : CodingwithRK
 */

namespace Codingwithrk\RkCountryFlags\Facades;

use Illuminate\Support\Facades\Facade;

class RkCountryFlags extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rk-country-flags';
    }
}