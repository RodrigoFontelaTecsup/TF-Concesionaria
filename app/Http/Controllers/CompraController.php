<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Auto;
use App\Models\Compra;
use App\Models\User;
use App\Models\Venta;

class CompraController extends Controller
{
    

    public function compra(){

        $compras = Venta::all();
        return view('comprar.index', compact('compras'));
    }

    public function index(){
        return view('compra');
    }

    public function store(Request $request){
            $compra = new Venta();
            
            $compra->codigo_auto = $request->codigo_auto;
            $compra->fecha_venta = $request->fecha_venta;
            $compra->precio_venta = $request->precio_venta;
            $compra->dni_cliente = $request->dni_cliente;
            $compra->tipo_pago = $request->tipo_pago;
            $compra->save();
    
            return redirect()->route('comprar.store');
        }

}

