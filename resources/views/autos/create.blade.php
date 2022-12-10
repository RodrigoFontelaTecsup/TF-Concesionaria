@extends('layouts.plantilla')

@section('title', 'Crear auto')

@section('content')

<form action="{{ route('autos.store') }}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">

    @csrf
    
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">Registro de nuevo auto</h2>

    <label for="marca">Marca:</label>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-1000" name="marca">

    <label for="modelo">Modelo:</label>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-1000" name="modelo">

    <label for="precio">Precio:</label>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-1000" name="precio">

    <label for="color">Color:</label>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-1000" name="color">

    <label for="kilometraje">Kilometraje</label>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-1000" name="kilometraje">

    <label for="stock">Stock</label>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-1000" name="stock">

    <label for="categoria">Categoria</label>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-1000" name="categoria">

    <div class="col-auto">
        <input style="font-size:0.8em;" class="form-control" type="file" name="auto">
    </div>

    <div class="col-auto">
        <button style="font-size: 0.8em;" type="submit" class="btn btn-primary mb-3">Subir auto</button>
    </div>
</form>
@endsection