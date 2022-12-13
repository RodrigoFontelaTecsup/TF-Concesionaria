@extends('layouts.app')
@section('title', 'Formulario de Contacto')
@section('content')
    <style>
        #form-register {
            width: 500px;
            background: #24303c;
            opacity: .9;
            padding: 30px;
            margin: auto;
            margin-top: 100px;
            border-radius: 4px;
            border: 2px solid;
            font-size: 2em;
            font-family: 'calibri';
            color: white;
        }

        #campo-nombre,#campo-correo,
        #mensaje {
            width: 400px;
            background: #24303c;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 16px;
            border: 1px solid #1f53c5;
            font-family: 'calibri';
            resize: none;
            font-size: 22px;
            color: white;
        }

        #title {
            font-size: 1em;
            margin-bottom: 20px;
        }
        #mensaje {
            width: 400px;
        }

        #button {
            width: 100%;
            background: #1f53c5;
            border: none;
            padding: 12px;
            color: white;
            margin: 16px 0;
            font-size: 1em;
        }
    </style>

    <form id="form-register" action="{{ route('store') }}" method="POST">
        <h1 id="title">
            Envia tu mensaje
        </h1>
        @csrf
        <label>
            Nombre:
            <input id="campo-nombre" type="text" name="name">
            <br>
        </label>

        <label>
            Correo:
            <input id="campo-correo" type="text" name="correo">
            <br>
        </label>

        <label>
            Mensaje:
            <br>
            <textarea id="mensaje" name="mensaje" rows="6" cols=""></textarea>
        </label>
        <br>
        <button id="button" type="submit">Enviar Mensaje</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
@endsection
