<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;

class VentaController extends Controller
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

    public function index(){
        
        $ventas = Venta::all();
        return view('venta', compact('ventas'));
    }
}
