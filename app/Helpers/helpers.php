<?php

use App\Models\Image;
use Illuminate\Support\Str;

function saveNewImage($avatar, $path, $obj)
{
    $file_name = time() . '.' . $avatar->getClientOriginalExtension();
    $avatar->move($path, $file_name);
    $image = new Image();
    $image->name = $file_name;
    $image->url = $path . '/' . $file_name;
    $obj->images()->save($image);
}
