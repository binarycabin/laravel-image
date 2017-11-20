<?php

namespace BinaryCabin\LaravelImage\Http\Controllers\Uploads\Images;

use BinaryCabin\LaravelImage\Http\Controllers\Uploads\BaseUploadController;
use Storage;

class UploadController extends BaseUploadController
{

    protected $storagePrefix;

    public function show($fileName){
        $image = \BinaryCabin\LaravelImage\Models\Image::where('file_name',$fileName)->first();
        if(!$image){
            abort(404);
        }
        return $image->imageResponse();
    }

}