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
        <title>Product example · Bootstrap v5.2</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/product/">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])




        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            .body{            
                /*Fondo*/
                background-image: url(https://acegif.com/wp-content/uploads/gifs/race-car-19.gif);
                background-position: center;
                background-size: cover;
                background-attachment: fixed; 
            }
            .container {
                max-width: 960px;
            }

            /*
     * Custom translucent site header
     */

            .site-header {
                background-color: rgba(0, 0, 0, .85);
                -webkit-backdrop-filter: saturate(180%) blur(20px);
                backdrop-filter: saturate(180%) blur(20px);
            }

            .site-header a {
                color: #8e8e8e;
                transition: color .15s ease-in-out;
            }

            .site-header a:hover {
                color: #fff;
                text-decoration: none;
            }

            /*
     * Dummy devices (replace them with your own or something else entirely!)
     */

            .product-device {
                position: absolute;
                right: 10%;
                bottom: -30%;
                width: 300px;
                height: 540px;
                background-color: #333;
                border-radius: 21px;
                transform: rotate(30deg);
            }

            .product-device::before {
                position: absolute;
                top: 10%;
                right: 10px;
                bottom: 10%;
                left: 10px;
                content: "";
                background-color: rgba(255, 255, 255, .1);
                border-radius: 5px;
            }

            .product-device-2 {
                top: -25%;
                right: auto;
                bottom: 0;
                left: 5%;
                background-color: #e5e5e5;
            }


            /*
     * Extra utilities
     */

            .flex-equal>* {
                flex: 1;
            }

            @media (min-width: 768px) {
                .flex-md-equal>* {
                    flex: 1;
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
        </style>


        <!-- Custom styles for this template -->
        <link href="product.css" rel="stylesheet">
    </head>

    <body>

        <header class="site-header sticky-top py-1">
            <nav class="container d-flex flex-column flex-md-row justify-content-between">
                <a class="py-2" href="#" aria-label="Product">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="d-block mx-auto" role="img" viewBox="0 0 24 24">
                        <title>Product</title>
                        <circle cx="12" cy="12" r="10" />
                        <path
                            d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
                    </svg>
                </a>
                <a class="py-2 d-none d-md-inline-block" href="#">Tour</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Product</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Features</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Enterprise</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Support</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Pricing</a>
                <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
            </nav>
        </header>


        
        <main>
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
                <div class="col-md-5 p-lg-5 mx-auto my-5">
                    <h1 class="display-4 fw-normal">Punny headline</h1>
                    <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with
                        this example based on Apple’s marketing pages.</p>
                    <a class="btn btn-outline-secondary" href="#">Coming soon</a>
                </div>
                <div class="product-device shadow-sm d-none d-md-block" style="background-image: url('https://p4.wallpaperbetter.com/wallpaper/754/491/710/luxury-cars-4k-mclaren-570s-supercar-wallpaper-preview.jpg')"></div>
                <div class="product-device product-device-2 shadow-sm d-none d-md-block" style="background-image: url('http://1.bp.blogspot.com/-prlMGHgMbdQ/UCB6wDL6r4I/AAAAAAAAEOs/1RqXAuZxaz4/s640/TheMasterPro98%2B(66).jpg')"></div>
            </div>

            <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
                <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                    <div class="my-3 py-3">
                        <h2 class="display-5">AUTO DEPORTIVO</h2>
                        <p class="lead">REDEFINE EL ESTILO</p>
                    </div>
                    <div class="bg-light shadow-sm mx-auto "
                        style="background-image: url('https://elcomercio.pe/resizer/1vPxxpA9TBtWHal4xoEUipwdrFk=/580x330/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/5GFRILE77RAARAESGE45NPIYUM.jpg'); width: 70%; height: 300px; border-radius: 21px 21px 0 0;" ></div>
                </div>
                <div  class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" >
                    <div class="my-3 p-3" > 
                        <h2 class="display-5">AUTO NISSAN</h2>
                        <p class="lead">ACTIVA TU ACTITUD</p>
                    </div>
                    <div  style="background-image: url('https://elcomercio.pe/resizer/c5wbZxTSYlARQG0Cdn0nn2JdC7M=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/Q7VQXBPDKJCBBEGSZAXB3RLSZE.JPG'); width: 70%; height: 300px; border-radius: 21px 21px 0  0;" >
                    </div>
                </div>
            </div>

            <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
                <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                    <div class="my-3 p-3">
                        <h2 class="display-5">AUTO CONVERTIBLE</h2>
                        <p class="lead">DISEÑADA PARA HACER MÁS</p>
                    </div>
                    <div class="bg-dark shadow-sm mx-auto" style="background-image: url('https://gestion.pe/resizer/bmLexyoRSmJTrUZe-7Z3pn2S2aA=/580x330/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/PIQQZ4LD7ZAPDCJS4T5W3U7RRI.jpg'); width: 70%; height: 300px; border-radius: 21px 21px 0 0;" >
                    </div>
                </div>
                <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                    <div class="my-3 py-3">
                        <h2 class="display-5">AUTO COUPE</h2>
                        <p class="lead">And an even wittier subheading.</p>
                    </div>
                    <div class="bg-light shadow-sm mx-auto"
                    style="background-image: url('https://elcomercio.pe/resizer/43p7tMWirCUxLGFZmPuqDBd0GFk=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/XBHUPDAXBNF6XLLFM7SJD22TWU.jpeg'); width: 70%; height: 300px; border-radius: 21px 21px 0 0;" ></div>
                </div>
            </div>

            <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
                <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                    <div class="my-3 p-3">
                        <h2 class="display-5">AUTO VAN</h2>
                        <p class="lead">And an even wittier subheading.</p>
                    </div>
                    <div class="bg-body shadow-sm mx-auto" style="background-image: url('https://elcomercio.pe/resizer/Ab9Mm6-rZ4AMCCw5_r6Ir86Mcv8=/580x330/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/2EWYDPYV2NEPDKTG4OSVCQFDLI.jpg'); width: 70%; height: 300px; border-radius: 21px 21px 0 0;" >
                    </div>
                </div>
                <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                    <div class="my-3 py-3">
                        <h2 class="display-5">AUTO ROADSTER</h2>
                        <p class="lead">And an even wittier subheading.</p>
                    </div>
                    <div class="bg-body shadow-sm mx-auto" style="background-image: url('https://elcomercio.pe/resizer/4b32CZmQ8Xi1B2mIF96zu6C_dEA=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/2YVR3YSIXNB5TNRMR6LI6HL2MM.jpg'); width: 70%; height: 300px; border-radius: 21px 21px 0 0;" >
                    </div>
                </div>
            </div>

            <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
                <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                    <div class="my-3 p-3">
                        <h2 class="display-5">AUTO SEDAN</h2>
                        <p class="lead">And an even wittier subheading.</p>
                    </div>
                    <div class="bg-body shadow-sm mx-auto"
                    style="background-image: url('https://peru21.pe/resizer/3t4OxhBfseFuRMWrJYNxkG2Gftk=/580x330/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/TSTBNB4JYJFFPORYYGCO2EVD5E.jpg'); width: 70%; height: 300px; border-radius: 21px 21px 0 0;" ></div>
                </div>
                <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                    <div class="my-3 py-3">
                        <h2 class="display-5">AUTO CABRIOLET</h2>
                        <p class="lead">And an even wittier subheading.</p>
                    </div>
                    <div class="bg-body shadow-sm mx-auto"
                    style="background-image: url('https://elcomercio.pe/resizer/yizmWQxhVk2xKUoN4GUsa2Hfd1M=/580x330/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/QNLV7STPDBFUZM3Q2HQ3DVV4EY.jpg'); width: 70%; height: 300px; border-radius: 21px 21px 0 0" ></div>
                </div>
            </div>
        </main>

        <footer class="container py-5">
            <div class="row">
                <div class="col-12 col-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="d-block mb-2" role="img" viewBox="0 0 24 24">
                        <title>Product</title>
                        <circle cx="12" cy="12" r="10" />
                        <path
                            d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />
                    </svg>
                    <small class="d-block mb-3 text-muted">&copy; 2017–2022</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Cool stuff</a></li>
                        <li><a class="link-secondary" href="#">Random feature</a></li>
                        <li><a class="link-secondary" href="#">Team feature</a></li>
                        <li><a class="link-secondary" href="#">Stuff for developers</a></li>
                        <li><a class="link-secondary" href="#">Another one</a></li>
                        <li><a class="link-secondary" href="#">Last time</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Resource name</a></li>
                        <li><a class="link-secondary" href="#">Resource</a></li>
                        <li><a class="link-secondary" href="#">Another resource</a></li>
                        <li><a class="link-secondary" href="#">Final resource</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Business</a></li>
                        <li><a class="link-secondary" href="#">Education</a></li>
                        <li><a class="link-secondary" href="#">Government</a></li>
                        <li><a class="link-secondary" href="#">Gaming</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li><a class="link-secondary" href="#">Team</a></li>
                        <li><a class="link-secondary" href="#">Locations</a></li>
                        <li><a class="link-secondary" href="#">Privacy</a></li>
                        <li><a class="link-secondary" href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </footer>


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


    </body>

    </html>
@endsection