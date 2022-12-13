<div class="">
<form action="{{ route('autos.store') }}" method="POST" class="formulario"
    enctype="multipart/form-data">

    @csrf
    
    <h2 class="text-2x1 text-center py-4 mb-4 font-semibold">Registro de nuevo auto</h2>

    <div class="section">
        <label for="marca">Marca</label>
        <input type="text" name="marca"  class="caja">
    </div>
    <div class="section">
        <label for="modelo">Modelo</label>
        <input type="text" name="modelo"  class="caja">
    </div>
    <div class="section">
        <label for="precio">Precio</label>
        <input type="number" name="precio" class="caja">
    </div>
    
    <div class="section">
        <label for="kilometraje">Kilometraje</label>
        <input type="number" name="kilometraje" class="caja">
    </div>
    <div class="section">
        <label for="stock">Stock</label>
        <input type="number" name="stock" class="caja">
    </div>
    <div class="section">
        <label for="categoria">Categoria</label>
        <input type="text" name="categoria"  class="caja">
    </div>
    <div class="section">
        
    <div class="section">
        <label for="color">Color</label>
        <input type="color" name="color"  class="caja">
    </div>
    </div>
    <div class="section">
        <label for="rutaAuto"></label><br>
        <input type="file"  name="rutaAuto" class="caja img">
    </div>


    <br><button type="submit" class="btn btn-secondary btn-lg btn-block" style="width: 90%; margin-left: 5%;">Submit</button>
</form>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    .formulario{
        background-color: rgba(0, 0, 0, 0.81);
        margin-left: 10%;
        height: 80%;
        width: 30%;
        border:3px solid white; 
        margin: 0 auto;
        font-size: 1.2rem;
        margin-top: 2%;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color: white;
    
    }
    .section{
        margin-left: 10%;   
    }
    .caja{
        margin: 0 auto;
        width: 90%;
        color: rgba(0, 0, 0, 0.81);
    }
    .img{
    }
</style>
@extends('layouts.plantilla')
@section('title', 'Crear auto')
@section('content')
@endsection 