<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AutoController extends Controller
{
    //
    public function mostrarImagenAuto(String $nombre){
        $file = Storage::disk('autos')->get($nombre);
        return \Image::make($file)->response();
    }
}
