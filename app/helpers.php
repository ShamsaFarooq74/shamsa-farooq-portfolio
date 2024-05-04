<?php

use Illuminate\Support\Facades\Auth;


function place_image($file)
{

    $ext = $file->getClientOriginalExtension();
    $filename = random_int(0, 9999) . time() . '.' . $ext;
    $file->move('assets/uploads/place_images', $filename);
    return $filename;
}

// function subService_image($file)
// {
//     $ext = $file->getClientOriginalExtension();
//     $filename = time() . '.' . $ext;
//     $file->move('assets/uploads/subService', $filename);
//     return $filename;
// }

// function subServiceItem_image($file)
// {
//     $ext = $file->getClientOriginalExtension();
//     $filename = time() . '.' . $ext;
//     $file->move('assets/uploads/subServiceItem', $filename);
//     return $filename;
// }
