@extends('layouts.plantilla')

@section('title', 'CRUD Venta REGISTRADOS')

@section('content')
    <nav class="h-16 flex justify-end py-4 px-16">
        <a href="{{ route('welcome') }}"
            class="text-white rounded px-4 pt-1 h-10 bg-yellow-500 font-semibold mx-2
            hover:bg-yellow-600">Home</a>
        <a href="{{ route('autos.create') }}"
            class="text-white rounded px-4 pt-1 h-10 bg-green-500 font-semibold mx-2
            hover:bg-green-600">Registrar</a>
    </nav>
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

                @foreach ($venta as $item)
                    <tr
                        style="opcity: . ; font-size: 1.4rem; font-weight: bold; background-color:rgb(0, 0, 0); color:white; text-align: center; border: 2px solid black;">
                        <td class="p-3">{{ $item->codigo_auto}}</td>
                        <td class="p-3">{{ $item->fecha_venta}}</td>
                        <td class="p-3">{{ $item->precio_venta}}</td>
                        <td class="p-3">{{ $item->dni_cliente}}</td>
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
