<?php

namespace BinaryCabin\LaravelImage\Facades;

use Illuminate\Support\Facades\Facade;

class ImageHelper extends Facade
{
    protected static function getFacadeAccessor() {
        return 'imagehelper';
    }
}