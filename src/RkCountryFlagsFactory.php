<?php

/**
 * @author : CodingwithRK
 */

namespace Codingwithrk\RkCountryFlags;

class RkCountryFlagsFactory
{
    public function make($name)
    {
        return view('rk-country-flags::flags', strtolower($name))->render();
    }
}