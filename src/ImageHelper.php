<?php

namespace BinaryCabin\LaravelImage;

use Route;

class ImageHelper{

    public static function routes(){
        Route::prefix('/uploads/image')->group(function(){
            Route::get('{any}', '\BinaryCabin\LaravelImage\Http\Controllers\Uploads\Images\UploadController@show')->where('any', '.*');
        });
    }

}