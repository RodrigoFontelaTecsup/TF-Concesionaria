@extends('layouts.plantilla')

@section('title', 'CRUD DE USUARIOS REGISTRADOS')

@section('content')
    <nav class="h-16 flex justify-end py-4 px-16">
        <a href="{{ route('welcome') }}"
                class="text-white rounded px-4 pt-1 h-10 bg-yellow-500 font-semibold mx-2
                hover:bg-yellow-600">Home</a>
    </nav>
    <div style="opacity: .4;" class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

        <table class="table-fixed w-full" style="border: 2px solid black;"> 

            <thead style="border: 2px solid black;">
                
                <tr class="bg-gray-400 text-white py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                    <th class="w-1/8 py-4">Nombre</th>
                    <th class="w-1/8 py-4">Apellido</th>
                    <th class="w-1/8 py-4">DNI</th>
                    <th class="w-1/8 py-4">Celular</th>
                    <th class="w-1/8 py-4">Email</th>
                    <th class="w-1/8 py-4">Direccion</th>
                    <th class="w-1/10 py-4">Estado</th>
                    <th class="w-1/16 py-4">Created</th>
                    <th class="w-1/16 py-4">Updated</th>
                    <th class="w-28 py-4">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $date)
                    <tr style="text-align: center; border: 2px solid black;" class="border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{ $date->nombre }}</td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{ $date->apellido }}</td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{ $date->dni }}</td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{ $date->celular }}</td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{ $date->email }}</td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{ $date->direccion }}</td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{ $date->estado }}</td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{ $date->created_at }}</td>
                        <td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">{{ $date->updated_at }}</td>
                        <td class="p-3 flex justify-center">

                            <form action="{{ route('users.destroy', $date->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                                    <i class="fas fa-trash"></i></button>
                            </form>
                            <a href="{{ route('users.edit', $date->id) }}">
                                <button class="bg-green-500 text-white px-3 py-1 rounded-sm">
                                    <i class="fas fa-pen"></i></button>
                            </a>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
