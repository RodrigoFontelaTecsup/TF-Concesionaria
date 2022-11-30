<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Auto;
use App\Models\Compra;
use App\Models\User;

class CompraController extends Controller
{
    public function comprarImagenAuto(String $nombre){
        $file = Storage::disk('autos')->get($nombre);
        return \Image::make($file)->response();
    }
    public function comprarAuto($id){
        $autos = Auto::where('id',$id)->first();
        return view('compra')->with('auto',$autos);
    }
}

