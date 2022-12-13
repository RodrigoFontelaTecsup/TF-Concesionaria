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

    // ESTE CODIGO SE PUEDE ELIMINAR (CODIGO 2)
    public function subirAuto(Request $request){
        if($request->hashFile('auto')){
            $id = auth()->user()->id;
            $image = $request->file('auto');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $user = Auto::find($id);
            $auto = $user->Autos()->save(
                new Auto(['marca' => $request->marca,
                'modelo'=> $request->modelo,
                'precio'=> $request->precio,
                'color' => $request->color,
                'kilometraje'=> $request->kilometraje,
                'stock'=> $request->stock,
                'categoria'=> $request->categoria,
                'rutaAuto'=> $fileName
                ])
            );

            Storage::disk('autos')->put('/' . $fileName, file_get_contents($image));

            return redirect('autos.index');
        }
    }
    // FIN DEL CODIGO 2


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
