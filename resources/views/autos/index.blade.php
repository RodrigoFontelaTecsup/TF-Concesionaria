@extends('layouts.plantilla')

@section('title', 'CRUD AUTOS REGISTRADOS')

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
                    <th class="w-1/10 py-4 ...">Marca</th>
                    <th class="w-1/10 py-4 ...">Modelo</th>
                    <th class="w-1/10 py-4 ...">Precio</th>
                    <th class="w-1/10 py-4 ...">Color</th>
                    <th class="w-1/10 py-4 ...">Kilometraje</th>
                    <th class="w-1/10 py-4 ...">Stock</th>
                    <th class="w-1/10 py-4 ...">Categoria</th>
                    <th class="w-28 py-4 ...">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($autos as $item)
                    <tr
                        style="opcity: . ; font-size: 1.4rem; font-weight: bold; background-color:rgb(0, 0, 0); color:white; text-align: center; border: 2px solid black;">
                        <td class="p-3">{{ $item->marca }}</td>
                        <td class="p-3">{{ $item->modelo }}</td>
                        <td class="p-3">{{ $item->precio }}</td>
                        <td class="p-3">{{ $item->color }}</td>
                        <td class="p-3">{{ $item->kilometraje }}</td>
                        <td class="p-3">{{ $item->stock }}</td>
                        <td class="p-3">{{ $item->categoria }}</td>
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
