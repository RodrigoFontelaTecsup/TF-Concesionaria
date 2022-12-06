@extends('layouts.plantilla')

@section('title', 'Editar usuario')

@section('content')

<form action="{{ route('users.update', $user->id) }}" method="POST" class="bg-gray-400 w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">

    @csrf
    @method('put')
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold" style="font-size: 2em;">Editar cliente: {{ $user->nombre}}</h2>

    <label for="nombre">Nombre:</label>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-1000" 
    placeholder="Nombre" name="nombre" value="{{ $user->nombre}}">

    <label for="apellido">Apellido:</label>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-1000" 
    placeholder="Apellido" name="apellido" value="{{ $user->apellido}}">

    <label for="dni">Dni:</label>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-1000" 
    placeholder="Dni" name="dni" value="{{ $user->dni}}">
    
    <label for="celular">Celular:</label>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-1000" 
    placeholder="Celular" name="celular" value="{{ $user->celular}}">

    <label for="email">Email:</label>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-1000" 
    placeholder="Email" name="email" value="{{ $user->email}}">

    <label for="direccion">Direccion:</label>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-1000" 
    placeholder="Direccion" name="direccion" value="{{ $user->direccion}}">

    <label for="estado">Estado:</label>
    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-1000" 
    placeholder="Estado" name="estado" value="{{ $user->estado}}">
    
    <div class="flex justify-center">
        <button style="widht: 100px;" type="submit" class="my-3 bg-green-500 p-2 font-semibold
        rounded text-white hover:bg-green-600 mx-4">Editar</button>

        <a style="widht: 200px;" class="my-3 bg-blue-500 p-2 font-semibold
        rounded text-white hover:bg-blue-600" href="{{ route('users.index') }}">Cancelar</a>
    </div>

</form>
@endsection