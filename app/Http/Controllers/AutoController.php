<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Auto;
use Intervention\Image\Facades\Image;

class AutoController extends Controller
{
    
    // public function mostrarImagenAuto(String $nombre){
    //     $file = Storage::disk('autos')->get($nombre);
    //     return \Image::make($file)->response();
    // }
    public function mostrarAuto(string $rutaAuto)
    {
        $file = Storage::disk('autos')->get($rutaAuto);
        return Image::make($file)->response();
    }

    public function index(){

        $autos = Auto::all();
        return view('autos.index', compact('autos'));
    }

    public function create(){

        return view('autos.create');
    }

    public function store(Request $request){
        $auto = new Auto();

        if( $request->hasFile('rutaAuto')){
            $file = $request->file('rutaAuto');
            $destinationPath = 'images/autos/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSucces = $request->file('rutaAuto')->move($destinationPath, $filename);
            $auto->rutaAuto = $destinationPath . $filename;
        }
        
        $auto->marca = $request->marca;
        $auto->modelo = $request->modelo;
        $auto->precio = $request->precio;
        $auto->color = $request->color;
        $auto->kilometraje = $request->kilometraje;
        $auto->stock = $request->stock;
        $auto->categoria = $request->categoria;
        $auto->save();

        return redirect()->route('autos.index');

    }

    public function destroy($id){

        $auto = Auto::find($id);

        $auto->delete();

        return redirect()->route('autos.index');
    }
}
