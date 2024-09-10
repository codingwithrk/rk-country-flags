<?php

/**
 * @author : CodingwithRK
 */

namespace Codingwithrk\RkCountryFlags;

use Illuminate\View\Component;

class CountryFlag extends Component
{

    public $name;

    public mixed $width;

    public mixed $height;

    public mixed $class;

    public function __construct($name, $width = 32, $height = 32 , $class = null)
    {
        $this->name = strtolower($name);
        $this->width = $width;
        $this->height = $height;
        $this->class = $class;
    }

    public function render()
    {
        return view('rk-country-flags::flags.' . $this->name, [
            'name' => $this->name,
            'width' => $this->width,
            'height' => $this->height,
            'class' => $this->class,
        ]);
    }
}