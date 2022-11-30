@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* imagnes de los autos dispocision */
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

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }
        /* Navbar */
        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .card {
            width: 100%;
            height: 100%;
        }

        .album {
            background: linear-gradient(90deg, rgb(40, 41, 88) 0%, rgb(18, 74, 125) 32%, rgb(20, 106, 136) 52%, rgb(0, 104, 163) 94%);
            background-size: 300% 100%;
            animation: gradient 12s ease infinite;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .lead,
        p {
            color: whitesmoke;
        }

        #supe {
            background-image: url("https://images3.alphacoders.com/663/663894.jpg");
            background-size: ; 
        }
        .collapse{
            background-color: black;
            border-radius: 17px;
        }
        .fw-light {
            font-weight: bold !important;
        }
        /* #subrayado de enalaces */
        a:link, a:visited, a:active { 
            text-decoration:none;
        }

    </style>


</head>

<body>

    <main id="supe">z
        
        <section class="py-5 text-center container">
            <br>
            <br>
            <br>
            <br>
        <div class="row py-lg-5"></div>
                <div class="col-lg-6 col-md-8 mx-auto" style="color:#000000" style="font-weight: 500">
                    <h1 class="fw-light">Catalogo</h1>
                    <h4 class="fw-light">Cuando tienes habilidades para conducir, solo tienes que ponerlas a prueba. Compra un auto que combine su apariencia con tus habilidades y que ese diseñado para conducir de manera segura.</h4>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
        
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="tama">
                    @foreach($autos as $auto)
                    <div class="col">
                        <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" src="mostrarImagenAuto/{{$auto->rutafoto}}" preserveAspectRatio="xMidYMid slice" focusable="false">
                           <p class="card-text">MODELO: {{$auto->Modelo}}</p>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="collapse"  data-bs-target="#collapseExample{{$auto->id}}" id="mostrar">Caracteristicas</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><a style="color:#ffffff" href="/compras/{{ $auto->id}}">Comprar</a></button>                
                                    </div>
                                </div>
                                <div class="collapse" id="collapseExample{{$auto->id}}">
                                <div class="card card-body">
                                    <p class="card-text">MARCA: {{$auto->Marca}}</p>
                                    <p class="card-text">MODELO: {{$auto->Modelo}}</p>
                                    <p class="card-text">DISTRIBUIDOR: {{$auto->Distribuidor}}</p>
                                    <p class="card-text">PRECIO: {{$auto->Precio}} SOLES </p>
                                    <p class="card-text">AÑO: {{$auto->Precio}} SOLES </p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    @endforeach
                </div>
            </div>
        </div>
    </main>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html> @endsection