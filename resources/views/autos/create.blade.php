@extends('layouts.plantilla')

@section('title', 'Crear auto')

@section('content')

<form action="{{ route('autos.store') }}" method="POST" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg"
    enctype="multipart/form-data">

    @csrf
    
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">Registro de nuevo auto</h2>

    <div class="form-group">
        <label for="marca">Marca</label>
        <input type="text" name="marca"  class="form-control">
    </div>
    <div class="form-group">
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo"  class="form-control">
    </div>
    <div class="form-group">
        <label for="precio">Precio</label>
        <input type="number" name="precio" class="form-control">
    </div>
    <div class="form-group">
        <label for="color">Color</label>
        <input type="text" name="color"  class="form-control">
    </div>
    <div class="form-group">
        <label for="kilometraje">Kilometraje</label>
        <input type="number" name="kilometraje" class="form-control">
    </div>
    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number" name="stock" class="form-control">
    </div>
    <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" name="categoria"  class="form-control">
    </div>
    {{-- Imagen principal --}}
    <div class="form-group">
        <label for="rutaAuto">Imagen de Carro</label>
        <input type="file"  name="rutaAuto" class="form-control">
    </div>

    <button type="submit" class="btn btn-warning">Submit</button>
</form>
@endsection