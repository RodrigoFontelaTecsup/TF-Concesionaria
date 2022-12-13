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

@section('title', 'CRUD Venta REGISTRADOS')

@section('content')
    
    <div style="opacity: .4;" class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

        <table class="table-fixed w-full" style="border: 2px solid black;">

            <thead style="border: 2px solid black;">

                <tr class="bg-indigo-500 text-white">
                    <th class="w-1/10 py-4 ...">Codigo auto</th>
                    <th class="w-1/10 py-4 ...">Fecha venta</th>
                    <th class="w-1/10 py-4 ...">Precio venta</th>
                    <th class="w-1/10 py-4 ...">DNI cliente</th>
                    
                </tr>
            </thead>
            <tbody>

                @foreach ($compras as $item)
                    <tr
                        style="opcity: . ; font-size: 1.4rem; font-weight: bold; background-color:rgb(0, 0, 0); color:white; text-align: center; border: 2px solid black;">
                        <td class="p-3">{{ $item->codigo_auto }}</td>
                        <td class="p-3">{{ $item->fecha_venta }}</td>
                        <td class="p-3">{{ $item->precio_venta }}</td>
                        <td class="p-3">{{ $item->dni_cliente }}</td>
                        
                        <td class="p-3 flex justify-center">

                            <form action="{{ route('autos.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                                    <i class="fas fa-trash"></i></button>
                            </form>

                            <button class="bg-green-500 text-white px-3 py-1 rounded-sm">
                                <i class="fas fa-pen"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
