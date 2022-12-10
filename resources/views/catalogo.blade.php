@extends('layouts.app')
@section('content')
    <main>
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($autos as $item)
                <div class="col">
                    <div class="card shadow-sm">
                        <img height="450" src="storage/autos/carro1.png" alt="imagen de carro">
                        <div style="font-size:1.4em;" class="card-body">
                            <p class="card-text">Marca: {{ $item->marca }}</p>
                            <p class="card-text">Modelo: {{ $item->modelo }}</p>
                            <p class="card-text">Precio: {{ $item->precio }}</p>
                            <p class="card-text">Color: {{ $item->color }}</p>
                            <p class="card-text">Kilometraje: {{ $item->kilometraje }}</p>
                            <p class="card-text">Stock: {{ $item->stock }}</p>
                            <p class="card-text">Categoria: {{ $item->categoria }}</p>
                            <div class="d-flex justify-content-between align-items-center"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        < {{-- <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($users as $user)
                @foreach ($user->Fotos as $foto)
                <div class="col">
                    <div class="card shadow-sm">
                        <img height="200" src="/foto/{{$foto->ruta}}" alt="Imagen">
                        <div class="card-body">
                            <div class="collapse" id="collapseExample{{$foto->id}}">
                                @foreach ($foto->comentario as $comentario)
                                <div class="card card-body">
                                    {{$comentario->comentario}}
                                </div>
                                <small class="text-muted">{{$comentario->User->name}}</small>
                                @endforeach
                                <form method="POST" action="{{ route('subirComentario') }}" >
                                @csrf
                                    <div class="form-group">
                                        <div class="mt-2 row g-3">
                                            <div class="col-9">
                                                <input type="text" class="form-control" name="comentario" aria-describedby="emailHelp" placeholder="Ingrese su comentario">
                                            </div>
                                            <div class="col-2">
                                            <input type="hidden" name="id_foto" value="{{$foto->id}}">
                                                <button type="submit" class="btn btn-primary">
                                                    <x-bi-send />
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
            </div>
        </div>
    </div> --}} </main>
        @endsection
