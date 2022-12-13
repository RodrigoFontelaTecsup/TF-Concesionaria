@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Website with a contact Form 01</title>
        <link rel="stylesheet" href="main.css">
        <!-- GOOGLE FONTs -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- ANIMATE CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    </head>

    <body>
        <div class="content">
            <br><br><br><br>
            <h1 class="logo">Alquiler <span>Nira</span></h1>
            <div class="contact-wrapper animated bounceInUp">
                    <style>
                        * {
                            box-sizing: border-box;
                            margin-top: revert;
                        }

                        body {
                            background: #181818;
                            color: #fff;
                            line-height: 1.6;
                            font-family: 'Quicksand', sans-serif;
                            padding: 0 1.5em;
                        }

                        .container {
                            max-width: 1170px;
                            margin-left: auto;
                            margin-right: auto;
                            padding: 1.5em;
                        }

                        ul {
                            list-style: none;
                            padding: 0;
                        }

                        .logo {
                            text-align: center;
                            font-size: 3em;
                        }

                        .logo span {
                            color: #B70E21;
                        }

                        .contact-wrapper {
                            box-shadow: 0 0 20px 0 rgba(255, 255, 255, .3);
                        }

                        .contact-wrapper>* {
                            padding: 1em;
                        }

                        .contact-form {
                            background: #222222;
                        }

                        .contact-form form {
                            display: grid;
                            grid-template-columns: 1fr 1fr;
                        }

                        .contact-form form label {
                            display: block;
                        }

                        .contact-form form p {
                            margin: 0;
                            padding: 1em;
                        }

                        .contact-form form .block {
                            grid-column: 1 / 3;
                        }

                        .contact-form form button,
                        .contact-form form input,
                        .contact-form form textarea {
                            width: 100%;
                            padding: .7em;
                            border: none;
                            background: none;
                            outline: 0;
                            color: #fff;
                            border-bottom: 1px solid #d63031;
                        }

                        .contact-form form button {
                            background: #B70E21;
                            border: 0;
                            text-transform: uppercase;
                            padding: 1em;
                        }

                        .contact-form form button:hover,
                        .contact-form form button:focus {
                            background: #d63031;
                            color: #fff;
                            transition: background-color 1s ease-out;
                            outline: 0;
                        }

                        /* CONTACT INFO */
                        .contact-info {
                            background: #000;
                        }

                        .contact-info h4,
                        .contact-info ul,
                        .contact-info p {
                            text-align: center;
                            margin: 0 0 1rem 0;
                        }

                        /* LARGE SIZE */
                        @media(min-width: 700px) {
                            body {
                                padding: 0 4em;
                            }

                            .contact-wrapper {
                                display: grid;
                                grid-template-columns: 2fr 1fr;
                            }

                            .contact-wrapper>* {
                                padding: 2em;
                            }

                            .contact-info h4,
                            .contact-info ul,
                            .contact-info p {
                                text-align: left;
                            }
                        }
                    </style>
                    
                    <div class="contact-form">
                        <h3>Alquiler</h3>
                        <form action="{{ route('alquiler.store') }}" method="POST">

                            @csrf
                            <p>
                                <label>DNI</label>
                                <input type="number" name="dni_cliente">
                            </p>
                            <p>
                                <label>Fecha de Inicio</label>
                                <input type="date" name="fecha_inicio">
                            </p>
                            <p>
                                <label>Fecha de Fin</label>
                                <input type="date" name="fecha_fin">
                            </p>
                            <p>
                                <label>Mantenimiento</label>
                                <input type="date" name="Fecha_mantenimiento">
                            </p>
                            <p class="block">
                                <label>Precio</label>
                                {{-- <textarea name="precio" rows="3">-</textarea> --}}
                                <input type="number" name="precio">
                            </p>
                            <p class="block">
                                <button id ="btn1" type="submit">
                                    Pago
                                </button>
                            </p>
                        </form>
                    </div>
                    <div class="contact-info">
                        <h4>Mas informacion</h4>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> Speed</li>
                            <li><i class="fas fa-phone"></i> (+51) 903331088</li>
                            <li><i class="fas fa-envelope-open-text"></i> contact@website.com</li>
                        </ul>
                        <p>Lo mejor de lo meejor de lo mejor solo aqui en Speed Nira, mas barato imposible</p>
                        <p>Nira.com</p>
                    </div>
            </div>

        </div>

        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
                            <script>
                                 var button = document.getElementById("btn1");

                                 button.onclick = function(){
                                    Swal.fire('Alquiler realizado')
	                            }
                                
                             
                                           
         </script>
    </body>

    </html>
@endsection
