<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Dashboard Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">




    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        ul {
            font-size: 20px;
        }

        body {
            background-image: url('https://s1.1zoom.me/big0/168/Porsche_Many_Parking_508403.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            font-size: .875rem;
        }

        .feather {
            width: 16px;
            height: 16px;
        }


        .h2 {
            font-size: 50px;
            letter-spacing: -2px;
            color: rgb(3, 3, 3);
            text-shadow: 0 0 5px #2000ff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #0900ff, 0 0 25px #0012ff;
            -webkit-text-fill-color: #000000;
            -webkit-text-stroke-color: #2d09fb;
            -webkit-text-stroke-width: 0.2px;
        }

        .subT {
            font-size: 50px;
            letter-spacing: -2px;
            color: rgb(3, 3, 3);
            text-shadow: 0 0 5px #2000ff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #0900ff, 0 0 25px #0012ff;
            -webkit-text-fill-color: #000000;
            -webkit-text-stroke-color: #2d09fb;
            -webkit-text-stroke-width: 0.2px;
        }

        /*
 * Sidebar
 */
        .container-fluid {}

        .sidebar {
            position: fixed;
            top: 0;
            margin: 0;
            font-family: var(--bs-body-font-family);
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background: linear-gradient(90deg, rgb(72 70 70) 0%, rgb(59 60 59) 32%, rgb(85 88 86) 52%, rgb(71 72 71) 94%);
            background-size: 300% 100%;
            animation: gradient 12s ease infinite;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            /* rtl:raw:
  right: 0;
  */
            bottom: 0;
            /* rtl:remove */
            left: 0;
            z-index: 100;
            /* Behind the navbar */
            padding: 48px 0 0;
            /* Height of navbar */
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
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

        @media (max-width: 767.98px) {
            .sidebar {
                top: 5rem;
            }
        }

        .sidebar-sticky {
            height: calc(100vh - 48px);
            overflow-x: hidden;
            overflow-y: auto;
            /* Scrollable contents if viewport is shorter than content. */
        }

        .sidebar .nav-link {
            font-weight: 500;
            color: rgb(255, 255, 255);
            text-shadow: 0 0 5px #a007dd, 0 0 10px rgb(120, 5, 197), 0 0 15px rgb(111, 9, 179), 0 0 20px #ae00ff, 0 0 25px #aa09ca;
            -webkit-text-fill-color: #ffffff;
            -webkit-text-stroke-color: #2d09fb;
            -webkit-text-stroke-width: 0.2px;
        }

        .sidebar .nav-link .feather {
            margin-right: 4px;
            color: #727272;
        }

        .sidebar .nav-link.active {
            color: rgb(3, 3, 3);
            text-shadow: 0 0 5px #2000ff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #0900ff, 0 0 25px #0012ff;
            -webkit-text-fill-color: #000000;
            -webkit-text-stroke-color: #2d09fb;
            -webkit-text-stroke-width: 0.2px;
        }

        .sidebar .nav-link:hover .feather,
        .sidebar .nav-link.active .feather {
            color: inherit;
        }

        .sidebar-heading {
            font-size: .75rem;
        }

        /*
 * Navbar
 */
        .fs-6 {
            font-size: 1.5rem !important;
            font-family: Arial;
        }

        .navbar-brand {
            padding-top: 1rem;
            padding-bottom: 1rem;
            background-color: rgba(0, 0, 0, .25);
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
            color: rgb(255, 255, 255);
            text-shadow: 0 0 5px #ffffff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #ffffff, 0 0 25px #ffffff;
            -webkit-text-fill-color: #fafafa;
            -webkit-text-stroke-color: #2d09fb;
            -webkit-text-stroke-width: 0.2px;
        }

        .navbar .navbar-toggler {
            top: .25rem;
            right: 1rem;
        }

        .navbar .form-control {
            padding: .75rem 1rem;
        }

        .form-control-dark {
            color: #fff;
            background-color: rgba(255, 255, 255, .1);
            border-color: rgba(255, 255, 255, .1);
        }

        .form-control-dark:focus {
            border-color: transparent;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
        }

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

        .dropdown-menu[data-bs-popper] {
            top: 100%;
            margin-left: -100px;
            margin-top: var(--bs-dropdown-spacer);
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">NIRA</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="cerrar-sesion">
            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img style="border-radius: 100%;"
                        src="https://peru21.pe/resizer/NBlbnlt-TxnMTjRNU1t9FzRb7lk=/1200x800/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/7HZ5PE55JJHCVP5A2O7F2BGV3Y.jpg"
                        alt="mdo" width="32" height="32" class="j">
                </a>
                <!-- cerrar sesion -->
                <ul class="dropdown-menu text-small">

                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar
                            Cesion</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('admin.index') }}">
                                <span data-feather="home" class="align-text-bottom"></span>
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">
                                <span data-feather="file" class="align-text-bottom"></span>
                                Clientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('venta.index') }}">
                                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                Ventas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('alquiler.index') }}">
                                <span data-feather="users" class="align-text-bottom"></span>
                                Alquileres
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('autos.index') }}">
                                <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                                Autos
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Bienvenido Admin!</h1>
                </div>

                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://fondosmil.com/fondo/21960.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://s1.1zoom.me/big0/969/Ferrari_Lamborghini_446546.jpg" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.todomotorperu.com/wp-content/uploads/2021/04/TOYOTA-MAS-2021.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <br><br><br><br>
                <h2 class="subT">Pa que te animes de lo que nunca tendras!</h2>
                <br><br><br><br>

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://cdn.motor1.com/images/mgl/o8PwE/s1/honda-nsx-2019.webp"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Acura</h5>
                                <p class="card-text">Nos perfeccionamos cada dia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://cdn.motor1.com/images/mgl/7wZjo/s1/2020-nissan-gt-r-nismo.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nissan</h5>
                                <p class="card-text">Un español con coche italiano, diseñado por un griego ganando en
                                    Alemania esta bien</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://autodinamico.mx/wp-content/uploads/2021/08/86-AD4-1920x1080.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Toyota</h5>
                                <p class="card-text">Miré a mi alrededor y no encontré el auto de mis sueños por lo que
                                    decidí construirlo yo mismo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="https://s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2018/10/31164903/Foto2-2.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Audi</h5>
                                <p class="card-text">A la vanguardia de la Técnica</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="http://automundo.pe/wp-content/uploads/2019/09/Screen-Shot-2019-09-26-at-3.16.34-PM.png"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">BMW</h5>
                                <p class="card-text">El placer de conducir</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="http://www.hennesseyspecialvehicles.com/wp-content/uploads/2017/06/F5_teaser_REAR_lights-1024x576.jpg"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Gennessy</h5>
                                <p class="card-text">La forma mas rapida de visitar el cielo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
        </script>
    <script src="dashboard.js"></script>
</body>

</html>