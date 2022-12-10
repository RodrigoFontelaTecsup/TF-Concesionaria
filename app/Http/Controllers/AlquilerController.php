<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alquiler;

class AlquilerController extends Controller
{

    public function alquiler(){

        $alquiler = Alquiler::all();
        return view('alquiler.index', compact('alquiler'));
        //return "Bienvenido a la pestaña alquiler";
    }

    public function index(){
        return view('alquiler');
    }
}
