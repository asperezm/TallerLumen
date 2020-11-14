<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class ImageController extends BaseController
{
    public static $images = array(
        "1.jpeg",
        "2.jpeg",
        "3.jpeg",
        "4.jpeg",
        "5.jpeg",
        "6.jpeg",
        "7.jpeg",
        "8.jpeg",
        "9.jpeg",
        "10.jpeg",
        "11.jpeg",
        "12.png",
        "13.png",
        "14.png",
        "15.png",
        "16.png",
        "17.png",
        "18.png",
        "19.png",
    );

    public function index()
    {
        $totalImages = (count(ImageController::$images));
        $randomNumber = (rand(0, ($totalImages - 1)));
        $data['imageName'] = ImageController::$images[$randomNumber];
        $data['id'] = gethostbyname(gethostname());
        $data['storage'] = Storage::disk('s3');

        return view('image.index')->with('data', $data);
    }
}
