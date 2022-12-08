<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alquiler;

class AlquilerController extends Controller
{
    /*
    public function alquiler(){
        return view('alquiler');
    }

    public function index(){
        $alquileres = Alquiler::all();
        return view('alquiler.index');
    }
    */

    public function alquiler(){

        return view('alquiler');
    }
}
