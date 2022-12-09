<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MisAutosController extends Controller
{
  
    public function index(){
      return view('misCarros');
    }
    public function guardarCompra(Request $request){
      return $request;
    }

}
