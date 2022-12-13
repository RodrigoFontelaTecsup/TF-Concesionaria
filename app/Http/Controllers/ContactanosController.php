<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contacto');
        // return view('contactanos');
    }

    public function store(Request $request){
        
        // $request->validate([
        //     'name' => 'required',
        //     'correo' => 'required|email',
        //     'mensaje' => 'required',
        // ]);

        $correo = new ContactanosMailable($request->all());
        Mail::to('Nira.Motors@gmail.com')->send($correo);

        return redirect()->route('contacto')->with('info', 'Mensaje enviado correctamente');
    }
}
