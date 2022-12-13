@extends('layouts.app')
@section('title', 'CATALOGO')
@section('content')
<br><br>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($autos as $item)
            <div class="">
                
                <div class="card shadow-sm">
                    <img src="{{ asset($item->rutaAuto)}}" class="vista" width="">
                    <div style="font-size:1;" class="info">
                        <p class="title">{{ $item->marca }}</p>
                        <p class="des">Modelo: {{ $item->modelo }}</p>
                        <p class="des">Precio: {{ $item->precio }}</p>
                        <p class="des">Color: {{ $item->color }}</p>
                        <p class="des">Kilometraje: {{ $item->kilometraje }}</p>
                        <p class="des">Stock: {{ $item->stock }}</p>
                        <p class="des">Categoria: {{ $item->categoria }}</p>
                        <a href="{{ route('comprar.index') }}">
                            <button type="submit" class="des bt">Comprar</button>
                        </a>
                        <a href="{{ route('alquiler') }}">
                            <button type="submit" class="des bt">Alquilar</button>
                        </a>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <style>

        .tage{
                
            background-color: #5a5a5a;
            width: 25%;
            left: 50%;
            margin: 0 auto;
            height: 60%;        
            opacity: .9;
            text-align: center;
        }
        .port{
            width: 100%;
            
        }
        .info{
            margin-top: 10%;
            height: 30%;
            width:  60%;

        }

        .des{
            margin: 5%;
            font-size: 1em;
            width: 160%;
            

        }
        .card{
            width: 80%;
            height:700px;
            margin: 3%;
            background-color: rgba(0, 0, 0, 0.500);
            border-radius:5%;
            font-family: Georgia, 'Times New Roman', Times, serif;
       
        }
        .vista{
            margin: 0 auto;
            height: 35%;
            border-radius:5%;
            border: 2px solid white;
            width: 410px;
        }
        .title{
            margin-top: -10%;
            margin-left: 55%;
            text-align: center;
            <color: white;
            text-decoration: underline;
            font-size: 2em;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }
        .bt{
            border-radius: 10px;
            background-color: black;
            color:white;
            border-color:white;        
            border: 2px solid white;
            font-size: 1.2em;
        }
    </style>
@endsection
