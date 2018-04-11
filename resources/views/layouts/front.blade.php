<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invitaciones Sanchez</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('front/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}"> {{-- Color Picker --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <style>
        h4 {
            text-align: center;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .amount {
            display: inline;
        }

        #pay {
            margin-top: 10px;
        }

        .form-control,
        .btn {
            border-radius: 0;

            .standard-button {
                // background-color: #eebe25;
                color: rgba(0, 0, 0, 0.5);
                text-transform: uppercase;
                padding-top: 12px;
                padding-bottom: 12px;
                padding-left: 35px;
                padding-right: 35px;
                border-radius: 0;
                border: none;
                margin-top: 20px;
                margin-bottom: 20px;
                width: 16em;
                font-weight: 600;
                &:hover,
                &:active {
                    // background-color: #616dab;
                    background-color: #4b6a7e;
                    color: white;
                }

            }

            .btn-anim {
                -webkit-transition: all 0.3s;
                -moz-transition: all 0.3s;
                transition: all 0.3s;
            }


            .btn-anim:after {
                content: '';
                position: absolute;
                z-index: -1;
                -webkit-transition: all 0.3s;
                -moz-transition: all 0.3s;
                transition: all 0.3s;
            }
    </style>
</head>

<body>

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li>
                                <a href="{{ route('login') }}">
                                    <i class="fa fa-user"></i> Entrar</a>
                            </li>
                        </ul>
                    </div>
                </div>
                @if(session()->has('message'))
                <div class="x_content bs-example-popovers">
                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h3>
                            <strong>Mensaje del sistema:</strong> {{ session()->get('message') }}</h3>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1>
                            <a href="{{url('/')}}">
                                <img src="{{asset('front/img/sanchez_2.jpg')}}" style="width:176px;">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="{{url('/')}}">Inicio</a>
                        </li>
                        <li>
                            <a href="{{url('foto')}}">Invitaciones con foto</a>
                        </li>
                        <li>
                            <a href="{{url('laser')}}">Grabado Laser</a>
                        </li>
                        <li>
                            <a href="{{url('bodas')}}">Invitaciones de Boda</a>
                        </li>
                        <li>
                            <a href="{{url('quince')}}">Invitaciones de XV años</a>
                        </li>
                        <li>
                            <a href="{{url('infantiles')}}">Invitaciones de Niños</a>
                        </li>
                        <li>
                        <a href="{{url('contact')}}">Contactanos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End mainmenu area -->

    @yield('content')

    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>INVITACIONES
                            <span>SANCHEZ</span>
                        </h2>
                        <p>
                            Matriz Av. Central Oriente No. 680 (29000) Tuxtla Gutiérrez, Chiapas
                            <br> (01 961) 60 00 159
                        </p>
                        <p>
                            Sucursal 1ª.Norte Poniente Nº 834-D
                            <br> (01 961) 65 84 991
                        </p>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/imprenta.sanchez" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                            {{--
                            <a href="#" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a> --}}
                            <a href="https://www.instagram.com/invitaciones_sanchez/" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">

                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">

                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Subscribete</h2>
                        <p>Y recibe nuestras promociones y regalos sorpresas!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Escribe tu e-mail">
                                <input type="submit" value="Suscribirme">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End footer top area -->

    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2018. Todos los derechos reservados.
                            <a href="#" target="_blank">invitacionessanchez.com</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End footer bottom area -->

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/js/jquery.sticky.js')}}"></script>

    <!-- jQuery easing -->
    <script src="{{asset('front/js/jquery.easing.1.3.min.js')}}"></script>

    <!-- Main Script -->
    <script src="{{asset('front/js/main.js')}}"></script>

    <!-- Slider -->
    <script type="text/javascript" src="{{asset('front/js/bxslider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('front/js/script.slider.js')}}"></script>

    {{-- Ckeditor --}}
    <script src="{{asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js')}}"></script>
    <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.3/js/bootstrap-colorpicker.min.js"></script>
    <script>
        $('#color').colorpicker({});
    </script>
    <script>
        $('#colorin').colorpicker({});
    </script>
    <script type="text/javascript">
        function showContent() {
            element = document.getElementById("content");
            check = document.getElementById("check");
            if (check.checked) {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
        }
    </script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyANCHCpQVaYUmdj1ld0VcCCD5Wj-6XubYw"></script>
    {{--
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANCHCpQVaYUmdj1ld0VcCCD5Wj-6XubYw"></script> --}}

    <script type="text/javascript">
        jQuery(function ($) {
            function init_map1() {
                var myLocation = new google.maps.LatLng(16.752887,  -93.111283);
                var mapOptions = {
                    center: myLocation,
                    zoom: 16
                };
                var marker = new google.maps.Marker({
                    position: myLocation,
                    title: "Invitaciones Sanchez Matriz"
                });
                var map = new google.maps.Map(document.getElementById("map1"),
                    mapOptions);
                marker.setMap(map);
            }
            init_map1();
        });
    </script>

    <style>
        .map {
            min-width: 400px;
            min-height: 400px;
            width: 100%;
            height: 100%;
        }

        .header {
            background-color: #F5F5F5;
            color: #36A0FF;
            height: 70px;
            font-size: 27px;
            padding: 10px;
        }
    </style>
</body>

</html>