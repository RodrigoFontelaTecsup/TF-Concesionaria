<style>
    .boxi{
        padding-left: 2.7%;
        margin: 1%;

    }
    .banner{
        display: flex;
        background-color: rgb(0, 0, 0);
        color: #fff;
        
        width:100%;

        margin-top: -0%;
        position: index;
        opacity: .8;
        
    }
    .imagen{
        padding-left: 1%;
        padding-top: 0.5%;
    }
</style>




<div class="banner"> 
    <div class="imagen">
        
    <img src="https://static.wixstatic.com/media/413aee_74c3a1ab8e4d4d2aa4b0c02f5f739009~mv2.png/v1/fill/w_470,h_202,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Nira%20Logo%20Orange.png"
     alt="img/png" heigt="400" width="100">
    
    </div>
    <div class="boxi">
        <a href="{{ route('admin.index') }}">INICIO</a>
    </div >
</div>
@extends('layouts.plantilla')

@section('title', 'CRUD Alquiler REGISTRADOS')

@section('content')
    <div style="opacity: .4;" class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

        <table class="table-fixed w-full" style="border: 2px solid black;">

            <thead style="border: 2px solid black;">

                <tr class="bg-indigo-500 text-white">
                    <th class="w-1/10 py-4 ...">Fecha Inicio</th>
                    <th class="w-1/10 py-4 ...">Fecha Fin</th>
                    <th class="w-1/10 py-4 ...">Precio</th>
                    <th class="w-1/10 py-4 ...">DNI cliente</th>
                    <th class="w-1/10 py-4 ...">Fecha mantenimiento</th>
                    <th class="w-28 py-4 ..."></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($alquiler as $item)
                    <tr
                        style="opcity: . ; font-size: 1.4rem; font-weight: bold; background-color:rgb(0, 0, 0); color:white; text-align: center; border: 2px solid black;">
                        <td class="p-3">{{ $item->fecha_inicio}}</td>
                        <td class="p-3">{{ $item->fecha_fin}}</td>
                        <td class="p-3">$ {{ $item->precio}}</td>
                        <td class="p-3">{{ $item->dni_cliente}}</td>
                        <td class="p-3">{{ $item->Fecha_mantenimiento}}</td>
                        <td class="p-3 flex justify-center"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
