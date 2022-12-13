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

    public function store(Request $request){
        $alquiler = new Alquiler();
        
        $alquiler->fecha_inicio = $request->fecha_inicio;
        $alquiler->fecha_fin = $request->fecha_fin;
        $alquiler->precio = $request->precio;
        $alquiler->pago = $request->pago;
        $alquiler->dni_cliente = $request->dni_cliente;
        $alquiler->Fecha_mantenimiento= $request->Fecha_mantenimiento;
        $alquiler->save();

        return redirect()->route('alquiler.store');
    }

}
