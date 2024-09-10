<?php

/**
 * @author : CodingwithRK
 */

namespace Codingwithrk\RkCountryFlags;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class RkCountryFlagsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'rk-country-flags');

        Blade::component('rk-country-flags', CountryFlag::class);
    }

    public function register()
    {
        $this->app->singleton('rk-country-flags', function() {
            return new RkCountryFlagsFactory();
        });
    }
}