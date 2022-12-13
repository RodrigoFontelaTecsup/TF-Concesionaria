<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Catalogo de Autos</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
            color: whitesmoke;
            background: linear-gradient(90deg, rgb(40, 41, 88) 0%, rgb(18, 74, 125) 32%, rgb(20, 106, 136) 52%, rgb(0, 104, 163) 94%);
            background-size: 300% 100%;
            animation: gradient 12s ease infinite;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            
            /*Fondo*/
            background-image: url(https://acegif.com/wp-content/uploads/gifs/race-car-19.gif);
            background-position: center;
            background-size: cover;
            background-attachment: fixed; 
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
        /* tamaño de la carta */
        .card {
            height: 45vh;
            width: 50vw;
            border-radius: 20px;
            padding: 1rem;
            transition: all 0.8s;
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid white;
            backdrop-filter: blur(10px);
        }
        /* login */
        .card-header{
            text-align: center;
            font-size: 40px;    
        }

        #cardregister {
            height: 80vh;
            width: 45vw;
        }

        #registrar {
            width: 100%;
        }

        .btn {
            width: 75%;
            height: 45px;
            border-radius: 55px;
            background: rgba(255, 255, 255, 0.137);
            color: white;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            border: none;
            margin-bottom: 1rem;
            cursor: pointer;
            transition: all 0.4s ease-in-out;
        }


        #nombre,
        #apellido,
        #email,
        #password,
        #password-confirm,
        #dni,
        #celular,
        #estado,
        #direccion {
            width: 100%;
            height: 30px;
            background-color: transparent;
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: 2px solid #CBCBCB;
            outline: none;
            margin-bottom: 1rem;
            color: white;
            text-align: left;
        }
        
        .
        .j{
            margin-left: 120px;
        }
    </style>
</head>

<body>
    <div id="app">

        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Inicio
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('home') }}">CATALOGO</a>
                            </li>
                            @guest
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('login') }}">LOGIN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('register') }}">REGISTRO</a>
                            </li>
                            @else
                        </ul>
                        <div class="cerrar-sesion">
                            <div class="dropdown text-end">
                                <a  href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img style="border-radius: 100%;" src="https://peru21.pe/resizer/NBlbnlt-TxnMTjRNU1t9FzRb7lk=/1200x800/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/7HZ5PE55JJHCVP5A2O7F2BGV3Y.jpg" alt="mdo" width="32" height="32" class="j">
                                </a>

                                <!-- cerrar sesion -->
                                <ul class="dropdown-menu text-small">

                                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar Cesion</a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>



        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>

    
</body>

</html>