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
        
        return view('compra');
    }

    // public function store(Request $request){
    //     $venta = new Venta();
        
    //     $venta->codigo_auto = $request->codigo_auto;
    //     $venta->fecha_venta = $request->fecha_venta;
    //     $venta->precio_venta = $request->precio_venta;
    //     $venta->dni_cliente = $request->dni_cliente;
    //     $venta->tipo_pago = $request->tipo_pago;
    //     $ven->save();

    //     return redirect()->route('comprar.store');
    // }
}
    public function alquiler(){
        return view('alquiler');
    }

    public function index(){
        $alquileres = Alquiler::all();
        return view('alquiler.index');
    }
    */

    public function index(){
        
        return view('compra');
    }

    // public function store(Request $request){
    //     $venta = new Venta();
        
    //     $venta->codigo_auto = $request->codigo_auto;
    //     $venta->fecha_venta = $request->fecha_venta;
    //     $venta->precio_venta = $request->precio_venta;
    //     $venta->dni_cliente = $request->dni_cliente;
    //     $venta->tipo_pago = $request->tipo_pago;
    //     $ven->save();

    //     return redirect()->route('comprar.store');
    // }
