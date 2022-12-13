<!DOCTYPE html>
<html lang="en">

<head>
    <!--
     - Roxy: Bootstrap template by GettTemplates.com
     - https://gettemplates.co/roxy
    -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Roxy by GetTemplates.co</title>
    <meta name="description" content="Roxy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/lightcase/lightcase.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script>
        ! function(n, t, e) {
            console.log("init");
            var o = {
                init: function(e) {
                    o.select2(), o.stellar(), o.carousel(), o.portfolio(), o.lightCase(), o.sideNav(), o.counter(),
                        o.skills(), o.aos(), o.navbarChange()
                },
                select2: function() {
                    n(e).ready(function() {
                        n("select").select2()
                    })
                },
                stellar: function() {
                    var e = n(t).width();
                    767 <= e && (n(".bg-fixed").attr("data-stellar-background-ratio", "0.8"), n.stellar({
                        horizontalScrolling: !1,
                        responsive: !0,
                        parallaxBackgrounds: !0,
                        scrollProperty: "scroll"
                    }))
                },
                carousel: function() {
                    n(".testi-carousel").owlCarousel({
                        loop: !0,
                        margin: 10,
                        autoplay: !0,
                        nav: !1,
                        dots: !0,
                        dotSpeed: 1e3,
                        autoplay: !0,
                        autoplaySpeed: 1e3,
                        items: 1
                    }), n(".client-slider").owlCarousel({
                        loop: !0,
                        margin: 10,
                        nav: !0,
                        navSpeed: 1e3,
                        dots: !1,
                        autoplay: !0,
                        autoplaySpeed: 1e3,
                        navText: ['<span class="fa fa-angle-left"></span>',
                            '<span class="fa fa-angle-right"></span>'
                        ],
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 3
                            },
                            1e3: {
                                items: 6
                            }
                        }
                    })
                },
                portfolio: function() {
                    var t = n(".grid-portfolio").isotope({
                        itemSelector: ".grid-item",
                        masonry: {
                            gutter: ".gutter-sizer",
                            columnWidth: ".grid-sizer"
                        },
                        percentPosition: !0
                    });
                    return n(".filter-button-group").on("click", "a", function() {
                        var e = n(this).attr("data-filter");
                        t.isotope({
                            filter: e
                        })
                    }), n(".btn-filter a.is-checked").addClass("active"), n(".btn-filter a").on("click",
                        function() {
                            n(".btn-filter a").removeClass("active"), n(this).addClass("active")
                        }), !1
                },
                lightCase: function() {
                    jQuery(e).ready(function(e) {
                        e("a[data-rel^=lightcase]").lightcase()
                    })
                },
                sideNav: function() {
                    n("#side-nav-open").click(function() {
                        n("#side-nav").css("width", "300"), setTimeout(function() {
                            n("body").addClass("sidenav-open")
                        }, 200), setTimeout(function() {
                            n("body").addClass("in")
                        }, 400)
                    }), n("#side-nav-close, #canvas-overlay").click(function() {
                        setTimeout(function() {
                            n("body").removeClass("in")
                        }, 200), setTimeout(function() {
                            n("body").removeClass("sidenav-open"), n("#side-nav").css("width", "0")
                        }, 400)
                    }), n("#side-search-open").click(function() {
                        n("#side-search").css("width", "300"), setTimeout(function() {
                            n("body").addClass("sidesearch-open")
                        }, 200), setTimeout(function() {
                            n("body").addClass("in")
                        }, 300)
                    }), n("#side-search-close, #canvas-overlay").click(function() {
                        setTimeout(function() {
                            n("body").removeClass("in")
                        }, 200), setTimeout(function() {
                            n("body").removeClass("sidesearch-open"), n("#side-search").css("width",
                                "0")
                        }, 300)
                    })
                },
                counter: function() {
                    n("#counter").each(function() {
                        n(this).waypoint({
                            handler: function(e) {
                                n(".number").countTo({
                                    speed: 1e3
                                }), this.destroy()
                            },
                            offset: "80%"
                        })
                    })
                },
                skills: function() {
                    n("#skills").each(function() {
                        return n(this).waypoint({
                            handler: function(e) {
                                n(".progress").each(function() {
                                    console.log(n(this).attr("data-percent")), n(this)
                                        .find(".progress-bar").delay(1e4).css({
                                            width: n(this).attr("data-percent")
                                        })
                                })
                            },
                            offset: "80%"
                        }), !1
                    })
                },
                aos: function() {
                    AOS.init({
                        once: !0
                    })
                },
                navbarChange: function() {
                    n(t).scroll(function() {
                        var e = n(t).scrollTop();
                        return 150 < e ? (n("#header-navbar").removeClass("navbar-transparent"), n("body")
                            .addClass("not-on-top")) : (n("body").removeClass("not-on-top"), n(
                            "#header-navbar").addClass("navbar-transparent")), !1
                    })
                }
            };
            n(e).ready(function() {
                o.init(n)
            })
        }(window.jQuery, window, document);
    </script>
    <style>
        /*
 * Roxy: Bootstrap template by GettTemplates.com
 * https://gettemplates.co/roxy
 */
        html,
        body {
            width: 100%;
            overflow-x: hidden;
        }

        body {
            font-family: 'Lato', sans-serif;
            font-weight: 300;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6 {
            font-family: 'Work Sans', sans-serif;
            margin-top: 0;
        }

        a {
            color: #ff00cc;
            transition: all .3s ease-in-out;
        }

        a:focus,
        button:focus {
            outline: none;
        }

        .btn:hover,
        a:hover {
            text-decoration: none;
            color: #333399;
        }

        img {
            max-width: 100%;
        }

        .bg-fixed {
            background-size: cover;
        }

        .bg-grey {
            background-color: #f7f8f9;
        }

        .fs-40 {
            font-size: 40px;
        }

        section {
            position: relative;
        }

        .section-content {
            padding-top: 80px;
            padding-bottom: 80px;
        }

        .title-wrap,
        .section-title {
            text-align: center;
        }

        .shadow {
            box-shadow: 0 10px 30px 0 rgba(67, 80, 98, 0.24), 0 2px 4px 0 rgba(67, 80, 98, 0.1) !important;
        }

        #header-navbar {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 11;
            transition: all 0.3s cubic-bezier(0.785, 0.135, 0.15, 0.86);
        }

        .navbar-brand {
            font-size: 40px;
            color: #000;
        }

        .navbar-nav .nav-link {
            color: #fff;
            transition: .3s ease;
        }

        .navbar-nav:hover li a {
            opacity: 0.5;
        }

        .navbar-nav:hover li a:hover {
            opacity: 1;
        }

        .navbar-toggler {
            font-size: 2rem;
            color: #fff;
        }

        .jumbotron {
            color: #fff;
            padding-top: 80px;
            padding-bottom: 80px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 50% 50%;
            position: relative;
            border-radius: 0;
            margin-bottom: 0;
            overflow: hidden;
            min-height: 100vh;
        }

        @media (max-width: 767px) and (orientation: landscape) {
            .jumbotron {
                min-height: 500px;
            }
        }

        .jumbotron .container {
            position: relative;
            z-index: 1;
        }

        .jumbotron:before {
            position: absolute;
            display: block;
            content: "";
            opacity: 0.8;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: #050117;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #333399, #02010e);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #333399, #010218);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .jumbotron h1 {
            line-height: .9;
            font-weight: bold;
            display: inline-block;
            border: 15px solid #fff;
            padding: 30px;
            font-size: 9rem;
            opacity: 0;
            animation: 1s fadeInFromTop cubic-bezier(0.785, 0.135, 0.15, 0.86) 1s forwards;
            animation-delay: .8s;
        }

        .jumbotron-single h1 {
            font-size: 3rem !important;
        }

        .overlay {
            color: #fff;
        }

        .overlay:before {
            position: absolute;
            display: block;
            content: "";
            opacity: 0.9;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: #02061a;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #030354, #090778);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #333399, #100a83);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .overlay.bg-white {
            color: #000;
        }

        .overlay.bg-white:before {
            background: #fff;
            opacity: .7;
        }

        .text-white {
            color: #fff;
        }

        /*==============================
=            BUTTON            =
==============================*/
        .btn {
            font-size: 14px;
            font-weight: 600;
            border-radius: 30px;
            padding: 9px 25px;
            text-transform: capitalize;
            transition: all 0.3s ease 0s;
        }

        .btn-primary {
            display: inline-block;
            background-color: #0f26c0;
            border-color: #10005c;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #333399;
            border-color: #333399;
            color: #fff;
        }

        .btn-outline-primary {
            color: #fff;
            background-color: transparent;
            background-image: none;
            border-color: #fff;
        }

        .btn-outline-primary:hover {
            background-color: #333399;
            border-color: #333399;
            color: #fff;
        }

        .btn-shadow {
            box-shadow: -5px 8px 20px 0px rgba(229, 16, 2, 0.15);
        }

        .btn-icon {
            color: #000;
        }

        .btn-link {
            color: #020104;
        }

        /*=====  End of BUTTON  ======*/
        /*==========================================
=            FORM RECTANGLE ETC            =
==========================================*/
        .rectangle-1 {
            width: 2000px;
            height: 400px;
            background: #031038;
            background: -webkit-linear-gradient(to right, #010007, #040642);
            background: linear-gradient(to right, #040628, #030423);
            transform-origin: 50% 150% 0;
            position: absolute;
            left: 0;
            z-index: 0;
            transform: scale(1) rotate(-10deg);
        }

        .rectangle-2 {
            width: 2000px;
            height: 400px;
            background: #06103c;
            background: -webkit-linear-gradient(to right, #03081d, #040329);
            background: linear-gradient(to right, #05021d, #07032f);
            transform-origin: 65% 100% 0;
            position: absolute;
            right: 0;
            z-index: 0;
            transform: scale(1) rotate(50deg);
        }

        @keyframes fade-in-right {
            from {
                opacity: 0;
                transform: translateX(-100vw) rotate(-15deg);
            }

            to {
                opacity: 1;
                transform: translateX(0) rotate(-15deg);
            }
        }

        @keyframes grow1 {
            from {
                opacity: 0;
                transform: scale(2) rotate(-10deg);
            }

            to {
                opacity: 1;
                transform: scale(1) rotate(-10deg);
            }
        }

        @keyframes grow2 {
            from {
                opacity: 0;
                transform: scale(2) rotate(50deg);
            }

            to {
                opacity: 1;
                transform: scale(1) rotate(50deg);
            }
        }

        @keyframes fadeInFromTop {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .rectangle-1 {
            opacity: 0;
            animation: grow1 ease 1s forwards;
            box-shadow: 0px 20px 30px 0px rgba(9, 21, 54, 0.25) !important;
        }

        .rectangle-2 {
            opacity: 0;
            animation: grow2 ease 1s forwards;
            box-shadow: 0px 20px 30px 0px rgba(9, 21, 54, 0.25) !important;
        }

        .rectangle-transparent-1 {
            width: 500px;
            height: 500px;
            border: 15px solid rgba(255, 255, 255, 0.08);
            position: absolute;
            left: -5%;
            bottom: -10%;
            display: block;
            animation: floating-slow ease-in-out 12s infinite;
        }

        .rectangle-transparent-2 {
            width: 600px;
            height: 600px;
            border: 15px solid rgba(255, 255, 255, 0.08);
            position: absolute;
            right: -10%;
            top: 5%;
            display: block;
            animation: floating-slow ease-in-out 12s infinite;
        }

        .circle-1 {
            width: 50px;
            height: 50px;
            border: 2px solid #fff;
            position: absolute;
            display: block;
            border-radius: 50%;
            transform-origin: 50% 50%;
            left: 5%;
            top: 50%;
            animation: fadeInFromTop .5s linear forwards, floating ease 4s infinite;
        }

        .circle-2 {
            width: 70px;
            height: 70px;
            top: 20%;
            left: 83%;
            border: 2px solid #fff;
            position: absolute;
            display: block;
            border-radius: 50%;
            transform-origin: 50% 50%;
            animation: fadeInFromTop .5s linear forwards, floating ease-in-out 4s infinite;
        }

        .circle-3 {
            top: 80%;
            right: 25%;
            width: 40px;
            height: 40px;
            border: 2px solid #fff;
            position: absolute;
            display: block;
            border-radius: 50%;
            animation: fadeInFromTop .5s linear forwards, floating ease-in-out 4s infinite;
        }

        @keyframes floating {
            0% {
                transform: translate(0%, 0%) rotate(25deg);
            }

            25% {
                transform: translate(5%, 15%) rotate(25deg);
            }

            50% {
                transform: translate(10%, 5%) rotate(25deg);
            }

            75% {
                transform: translate(0%, 15%) rotate(25deg);
            }

            100% {
                transform: translate(0%, 0%) rotate(25deg);
            }
        }

        @keyframes floating-slow {
            0% {
                transform: translate(0%, 0%) rotate(25deg);
            }

            25% {
                transform: translate(1%, 3%) rotate(25deg);
            }

            50% {
                transform: translate(2%, 1%) rotate(25deg);
            }

            75% {
                transform: translate(0%, 3%) rotate(25deg);
            }

            100% {
                transform: translate(0%, 0%) rotate(25deg);
            }
        }
        .img{
            
        }
        .triangle {
            position: absolute;
            
        }

        .triangle-1 {
            right: 0;
            animation: fadeInFromTop .5s linear forwards, floating ease-in-out 6s infinite;
            
        }

        .triangle-1 img {
            height: 150px;
            width: 150px;
            transform: rotate(30deg);
            border-radius:8px;
            opacity: .5;
        }

        .triangle-2 {
            top: 30%;
            left: 20%;
            animation: fadeInFromTop .5s linear forwards, floating ease-in-out 8s infinite;
        }

        .triangle-2 img {
            width: 175px;
            height: 175px;
            transform: rotate(15deg);
            border-radius:8px;
            opacity: .5;
        }

        .triangle-3 {
            top: 80%;
            left: 15%;
            animation: fadeInFromTop .5s linear forwards, floating ease-in-out 10s infinite;
        }

        .triangle-3 img {
            width: 145px;
            height: 145px;
            transform: rotate(40deg);
            border-radius:8px;
            opacity: .5;
        }

        .triangle-4 {
            top: 60%;
            right: 15%;
            animation: fadeInFromTop .5s linear forwards, floating ease-in-out 5s infinite;
        }

        .triangle-4 img {
            width: 145px;
            height: 145px;
            transform: rotate(-40deg);
            border-radius:8px;
            opacity: .5;
        }

        /*=====  End of FORM RECTANGLE ETC  ======*/
        /*================================
=            FEATURES            =
================================*/
        .feature-item {
            transition: all .2s ease-in-out 0s !important;
        }

        .feature-item:hover {
            transform: translateY(-13px);
        }

        .progress-bar {
            background-color: #ff00cc;
        }

        /*=====  End of FEATURES  ======*/
        /*=============================
=            TESTI            =
=============================*/
        .testi-img img {
            height: 60px;
            width: 60px !important;
            border-radius: 50%;
            display: inline-block !important;
        }

        .testi-details {
            text-align: left;
        }

        .testi-text {
            font-weight: 300;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .testi-icon {
            color: #ff00cc;
        }

        .testi-content {
            margin-top: 80px;
            padding-bottom: 80px;
        }

        .testi-item {
            margin-left: 15px;
            margin-right: 15px;
        }

        .owl-dot {
            position: relative;
            display: inline-block;
            margin: 0 5px;
            width: 12px;
            height: 12px;
            cursor: pointer;
        }

        .owl-dot span {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            outline: none;
            border-radius: 50%;
            background-color: rgba(255, 0, 204, 0.3);
            text-indent: -999em;
            cursor: pointer;
            position: absolute;
            box-shadow: 0 0 0 2px rgba(255, 255, 255, 0);
            -webkit-transition: box-shadow 0.3s ease, background-color 0.3s ease;
            transition: box-shadow 0.3s ease, background-color 0.3s ease;
        }

        .owl-dot.active>span {
            background-color: transparent;
            box-shadow: 0 0 0 2px #ff00cc;
        }

        .owl-dots {
            position: absolute;
            bottom: 0;
            display: block;
            text-align: center;
            left: 0;
            right: 0;
            clear: both;
            padding: 0;
            list-style: none;
            cursor: default;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .heading-section {
            position: relative;
        }

        /*=====  End of TESTI  ======*/
        /*=================================
=            PORTFOLIO            =
=================================*/
        .filter-button-group {
            margin-bottom: 15px;
        }

        .filter-button-group a {
            margin: 5px;
            cursor: pointer;
        }

        .grid-link a {
            margin: 5px;
            font-size: 20px;
            color: #000;
        }

        .grid-portfolio {
            overflow: hidden;
        }

        .gutter-sizer {
            width: 2%;
        }

        .grid-sizer,
        .grid-item {
            width: 32%;
        }

        .grid-item {
            margin-bottom: 20px;
            border-radius: 5px;
            overflow: hidden;
        }

        .grid-item:hover .grid-info {
            top: 50%;
            opacity: 1;
        }

        .grid-item-wrapper:before {
            content: '';
            display: block;
            background: rgba(255, 255, 255, 0.7);
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            transition: all .3s ease;
            opacity: 0;
        }

        .grid-item-wrapper:hover:before {
            opacity: 1;
        }

        .grid-info {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: all .3s ease;
        }

        .lightcase-icon-close:before {
            content: '\e870';
            font-family: "Linearicons-Free";
        }

        .grid-title {
            text-align: center;
        }

        /*=====  End of PORTFOLIO  ======*/
        /*===============================
=            SideNav            =
===============================*/
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1002;
            top: 0;
            left: 0;
            background-color: #000;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            color: #fff;
        }

        .sidenav-content {
            padding: 8px 32px;
            transform: translateY(20px);
            opacity: 0;
            transition: transform 0.5s cubic-bezier(0.785, 0.135, 0.15, 0.86), opacity 0.5s cubic-bezier(0.785, 0.135, 0.15, 0.86);
        }

        .in .sidenav-content {
            transform: translateY(0);
            opacity: 1;
            transition: transform 0.5s cubic-bezier(0.785, 0.135, 0.15, 0.86) 0.5s, opacity 0.5s 0.5s;
        }

        .sidenav a {
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav #side-nav-close,
        .sidenav #side-search-close {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        #side-search .form-control {
            background-color: transparent;
        }

        #side-search .input-group-text {
            background: transparent;
            color: #fff;
        }

        /*==============================
=            SKILLS            =
==============================*/
        .skill-item {
            width: 100%;
            position: relative;
            padding: 10px 0;
        }

        .skill-item p {
            font-size: 16px;
            text-transform: uppercase;
            display: inline-block;
            font-weight: 500;
        }

        .skill-item .text-muted {
            color: #939393;
        }

        .progress-bar,
        .progress {
            transition: all 4s;
        }

        /*=====  End of SKILLS  ======*/
        /*============================
=            BLOG            =
============================*/
        .blog-item {
            transition: all 0.3s ease-in-out;
            background-color: #f7f8f9;
            border-radius: 3px;
            overflow: hidden;
        }

        .blog-item:hover {
            box-shadow: 0 5px 15px -5px #333;
            transform: translateY(-6px);
            -webkit-transform: translateY(-6px);
            -moz-transform: translateY(-6px);
            transform: translateY(-6px);
            box-shadow: 0 7px 10px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0 7px 10px rgba(0, 0, 0, 0.15);
            -webkit-box-shadow: 0 7px 10px rgba(0, 0, 0, 0.15);
        }

        .bg-grey .blog-item {
            background-color: #fff;
        }

        .blog-item-wrapper {
            margin-bottom: 30px;
        }

        .blog-img img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .blog-title h4 {
            color: #000;
        }

        .blog-text {
            padding: 15px;
        }

        .blog-tag {
            color: #000;
            letter-spacing: 1.1px;
            text-transform: uppercase;
        }

        .blog-meta {
            color: #939393;
        }

        .blog-meta p {
            display: inline-block;
            font-size: 14px;
        }

        .blog-meta a {
            color: #939393;
        }

        .blog-author {
            display: inline-block;
            color: #939393;
        }

        .blog-author p {
            font-size: 14px;
            margin-bottom: 0;
        }

        .blog-share-wrapper {
            float: right;
            display: inline-block;
            margin: 0 -5px;
        }

        .blog-share-wrapper .blog-share {
            padding: 0 5px;
            cursor: pointer;
        }

        .blog-content img.float-left {
            margin: 15px 15px 15px 0;
        }

        .blog-content .img.float-right {
            margin: 15px 0 15px 15px;
        }

        /*=====  End of BLOG  ======*/
        /*====================================
=            FORM CONTROL            =
====================================*/
        .form-control:focus {
            border-color: #ff00cc;
            box-shadow: 0 0 0 0.2rem rgba(253, 101, 90, 0.25);
        }

        .form-control::-webkit-input-placeholder {
            opacity: .5;
        }

        .form-control::-moz-placeholder {
            opacity: .5;
        }

        .form-control:-ms-input-placeholder {
            opacity: .5;
        }

        .form-control::-ms-input-placeholder {
            opacity: .5;
        }

        .form-control::placeholder {
            opacity: .5;
        }

        /*=====  End of FORM CONTROL  ======*/
        /*==============================
=            CLIENT            =
==============================*/
        .client-slider .owl-nav {
            display: none;
        }

        .client-slider .client-item {
            padding: 0 40px;
        }

        /*=====  End of CLIENT  ======*/
        /*==================================
=            RESPONSIVE            =
==================================*/
        @media (max-width: 992px) {
            .not-on-top #header-navbar {
                position: fixed;
                top: 0;
                height: auto;
                width: 100%;
                background: #ff00cc;
                /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #333399, #ff00cc);
                /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #333399, #ff00cc);
                /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                z-index: 11;
            }

            #header-navbar {
                padding-top: 15px !important;
                padding-bottom: 15px !important;
            }

            .navbar-transparent .navbar-collapse {
                background: #ff00cc;
                /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #333399, #ff00cc);
                /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #333399, #ff00cc);
                /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                padding: 10px;
            }
        }

        @media (max-width: 767px) {
            .jumbotron h1 {
                font-size: 6rem;
            }

            .grid-item {
                width: 100%;
            }

            .progress {
                height: 30px;
                font-size: 16px;
            }
        }

        .box {
            width: 300px;
            font-size: 15px;
            padding: 8px;
            height: 15px;
            margin-top: 5px;
            margin-left: 10%;
            position: relative;


        }

        .label {
            color:black;
             
        }

        .boton {
            margin-top: 10px;
            margin-left: 40%;
            position: relative;

            border: 1px solid #1b1b1b;
            /*anchura, estilo y color borde*/
            padding: 10px;
            /*espacio alrededor texto*/
            background-color: #fefefe47;
            /*color botón*/
            color: #201f1f;
            /*color texto*/
            text-decoration: none;
            /*decoración texto*/
            text-transform: uppercase;
            /*capitalización texto*/
            font-family: 'Helvetica', sans-serif;
            /*tipografía texto*/
            
        }
        .grande{
            overflow: scroll;
            resize: none;
           
            height: 55px;
            
        }
        /*=====  End of RESPONSIVE  ======*/
    </style>
</head>


<div class="jumbotron d-flex align-items-center">
    <div class="container mx-auto mt-5 text-center"
        style="margin-left:40%; position:fixed; border:4px black; padding: 40px; widht:100px; background-color:rgba(255, 255, 255, 0.554);">
        <h1 style="font-size: 35px; margin-left: 25%; position: relative;">Datos</h1>

        @csrf
        <form action="{{ route('store') }}" method="POST" class="">
            {{-- NOMBRE --}}
            <label for="name">
                Nombre:
                <input type="text" name="name" class="box">
            </label>
            <br>
            @error('name')
                <p><strong>{{ $message }}</strong></p>
            @enderror

            {{-- CORREO --}}
            <label for="correo">
                Correo:
                <input type="text" name="correo" class="box">
            </label>
            <br>
            @error('correo')
                <p><strong>{{ $message }}</strong></p>
            @enderror

            {{-- MENSAJE --}}
            <label for="mensaje">
                Mensaje:
                <textarea name="mensaje" cols="30" rows="10" class="box grande"></textarea>
            </label>
            <br>
            @error('mensaje')
                <p><strong>{{ $message }}</strong></p>
            @enderror

            <button style="" class="boton" type=submit>Enviar</button>
        </form>


    </div>




    <div class="rectangle-1"></div>
    <div class="rectangle-2"></div>
    <div class="rectangle-transparent-1"></div>
    <div class="rectangle-transparent-2"></div>
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="triangle triangle-1">
        <img src="https://www.kia.com/content/dam/kwcms/gt/en/images/discover-kia/voice-search/parts-80-3.jpg" alt="">
    </div>
    <div class="triangle triangle-2">
        <img src="data:image/jpeg;base64,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" alt="">
    </div>
    <div class="triangle triangle-3">
        <img src="data:image/jpeg;base64,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" alt="">
    </div>
    <div class="triangle triangle-4">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTFhJUwjsfFpGFQArCEYNDgMeKifAfKJAxTwg&usqp=CAU" alt="">
    </div>
</div> <!-- Features Section-->


</footer> <!-- External JS -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="vendor/bootstrap/popper.min.js"></script>
<script src="vendor/bootstrap/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js "></script>
<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
<script src="vendor/isotope/isotope.min.js"></script>
<script src="vendor/lightcase/lightcase.js"></script>
<script src="vendor/waypoints/waypoint.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!-- Main JS -->
<script src="js/app.min.js "></script>
<script src="//localhost:35729/livereload.js"></script>
</body>

</html>
