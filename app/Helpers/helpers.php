<?php

use App\Models\Image;
use Illuminate\Support\Str;

function saveNewImage($image, $path, $obj)
{
    $file_name = str::random(8) . '_' . time() . '_' . str::random(8) . '.' . $image->getClientOriginalExtension();
    $image->move($path, $file_name);
    $image = new Image();
    $image->name = $file_name;
    $image->url = $path . '/' . $file_name;
    $obj->images()->save($image);
}
