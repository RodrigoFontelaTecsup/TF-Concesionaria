<!doctype html>
<html lang="en">
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Concesionaria</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* GLOBAL STYLES
-------------------------------------------------- */
        /* Padding below the footer and lighter body text */

        body {
            padding-top: 3rem;
            padding-bottom: 3rem;
            color: #5a5a5a;
        }

        body {
            margin: 0;
            font-family: var(--bs-body-font-family);
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);agr
            text-align: var(--bs-body-text-align);
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
        .h2-titulos{
            font-size: 50px;
            color: white;
            text-shadow: 0 0 5px white, 0 0 15px white, 0 0 20px white,
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


        /* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

        /* Carousel base class */
        .carousel {
            margin-bottom: 4rem;
        }

        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
            bottom: 3rem;
            z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
            height: 32rem;
        }


        /* MARKETING CONTENT
-------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
            margin-bottom: 1.5rem;
            text-align: center;
        }

        /* rtl:begin:ignore */
        .marketing .col-lg-4 p {
            margin-right: .75rem;
            margin-left: .75rem;
        }

        /* rtl:end:ignore */


        /* Featurettes
------------------------- */

        .featurette-divider {
            margin: 5rem 0;
            /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        /* rtl:begin:remove */
        .featurette-heading {
            letter-spacing: -.05rem;
        }

        /* rtl:end:remove */

        /* RESPONSIVE CSS
-------------------------------------------------- */

        @media (min-width: 40em) {

            /* Bump up size of carousel content */
            .carousel-caption p {
                margin-bottom: 1.25rem;
                font-size: 1.25rem;
                line-height: 1.4;
            }

            .featurette-heading {
                font-size: 50px;
            }
        }

        @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
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

        .nav-scroller {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .navbar-nav .show>.nav-link,
        .navbar-nav .nav-link.active {
            color: white;
        }

        .form-control-dark {
            border-color: var(--bs-gray);
        }

        .form-control-dark:focus {
            border-color: #fff;
            box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
        }

        .text-small {
            font-size: 85%;
        }

        .dropdown-toggle {
            outline: 0;
        }
        .rounded-circle{
            margin-left: 110px;
        }
        #boton{
            width: 150px;
            height: 50px;
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
        #circulo{
         height: 210px;
         border-radius: 55px;
         background: rgba(0, 0, 0, 0.500);
         color: black;
         font-size: 14px;
         font-weight: 600;
         text-transform: uppercase;
         border: none;
         margin-bottom: 1rem;
         cursor: pointer;
         transition: all 0.4s ease-in-out;
        }
        #dato{
        border-radius: 55px;
        background: rgba(0, 0, 0, 0.450);
         color: whitesmoke;
         font-weight: 600;
         border: none;
         margin-bottom: 1rem;
         cursor: pointer;
         transition: all 0.4s ease-in-out;
        }
        #imagen{
         border-radius: 55px;
         background: rgba(255, 255, 255, 0.200);
         color: whitesmoke;
         font-weight: 600;
         border: none;
         margin-bottom: 1rem;
         cursor: pointer;
         transition: all 0.4s ease-in-out;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>

<body>

    <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        INICIO
                    
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                        
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                            @guest
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('login') }}">LOGIN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('register') }}">REGISTRO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('home') }}">CATALOGO</a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('home') }}">CATALOGO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('alquiler') }}">ALQUILER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('categoria') }}">CATEGORIA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('contacto') }}">CONTACTANOS!</a>
                            </li>
                        </ul>
                        
                        <div class="dropdown text-end">
                            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://peru21.pe/resizer/NBlbnlt-TxnMTjRNU1t9FzRb7lk=/1200x800/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/7HZ5PE55JJHCVP5A2O7F2BGV3Y.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
                            </a>
                            
                            <ul class="dropdown-menu text-small">

                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar Sesion</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                            @endguest
                        </div>
                        
                    </div>
                </div>
            </nav>
        </header>
    <main>

        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            
        <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" src="https://img.remediosdigitales.com/46acfd/hyperion-xp-1-04/1366_521.jpg" />
                    <div class="container" >
                        <div class="carousel-caption" id="dato">
                            <h1>Deportivos</h1>
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" src="https://cdn.cheapism.com/images/2020tuscon.2e16d0ba.fill-1440x605.jpg" />

                    <div class="container" >
                        <div class="carousel-caption" id="dato">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" src="https://la-motorbit-media.s3.amazonaws.com/2016/08/modelos-autos-clasicos-hindustan.jpg" />

                    <div class="container" >
                        <div class="carousel-caption" id="dato">
                            <h1>Clasicos</h1>
                            <br>
                            <p><a class="btn btn-lg btn-primary" id = "boton" href="{{ route('home') }}">Catalogo</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row" id="">


            
                <div class="" style="text-align:center;">
                <iframe width="1200" height="500" src="https://www.youtube-nocookie.com/embed/YViEpnmDrn0?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div><!-- /.col-lg-4 -->
                

            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="h2-titulos">Toyota Hilux</h2>
                    <p class="lead">REDISEÑADA CON UNA NUEVA MÁSCARA FRONTAL CON FAROS LED QUE LE DAN UN ESTILO MÁS AGRESIVO, RESALTANDO SU FUERZA Y RESISTENCIA EN TODOS LOS CAMINOS.</p>
                </div>
                <div class="col-md-5" id ="imagen">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="https://www.toyotaperu.com.pe/sites/default/files/HILUX.png" width="430" height="430" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2" >
                    <h2 class="h2-titulos">Minivan Toyota Avanzada</h2>
                    <p class="lead"> LA NUEVA MINIVAN TOYOTA AVANZA EVOLUCIONÓ CONTIGO PARA DARTE LA POTENCIA Y ESPACIO QUE NECESITAS PARA SEGUIR CRECIENDO JUNTO A TODA TU FAMILIA. PREPÁRATE PARA UN NUEVO CAPÍTULO EN TU VIDA.</p>
                </div>
                <div class="col-md-5 order-md-1" id ="imagen">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="https://www.toyotaperu.com.pe/sites/default/files/Avanza_Miniatura%20%281%29.png" width="430" height="430" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="h2-titulos">Toyota Prius C</h2>
                    <p class="lead"> TOYOTA PRIUS C: EL HATCHBACK HÍBRIDO DE TOYOTA, COMPACTO Y ÁGIL PARA LA GRAN CIUDAD, CON EL PODER Y LA EFICIENCIA DEL SISTEMA HYBRID SYNERGY DRIVE.</p>
                </div>
                <div class="col-md-5"id ="imagen">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="https://www.toyotaperu.com.pe/sites/default/files/prius-c_322X189PX_0.png" width="430" height="430" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="h2-titulos">Toyota Raize</h2>
                    <p class="lead">LA NUEVA RAIZE LLEGÓ CON MUCHO MÁS DE LO QUE ESPERABAS EN TU PRIMERA SUV. DESCUBRE SU DISEÑO JUVENIL Y LA VARIEDAD DE COLORES EN LOS QUE LLEGA PARA COMBINAR A LA PERFECCIÓN CONTIGO Y TODOS TUS OUTFITS.</p>
                </div>
                <div class="col-md-5 order-md-1"id ="imagen">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="https://www.toyotaperu.com.pe/sites/default/files/MiniaturaWeb-Raize.png" width="430" height="430" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="h2-titulos">Toyota Rav4</h2>
                    <p class="lead">EXPANDE TUS LÍMITES EN LA NUEVA Y REDISEÑADA RAV4, LA SUV QUE COMBINA UNA DINÁMICA DE CONDUCCIÓN REFINADA CON UNA NOVEDOSA POSTURA MÁS ROBUSTA.</p>
                </div>
                <div class="col-md-5"id ="imagen">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="https://www.toyotaperu.com.pe/sites/default/files/miniatura_rav4_0.png" width="430" height="430" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->

        <!-- https://www.toyotaperu.com.pe/listado-modelos-toyota-->
    </main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>