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
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
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
                            <a href="./">
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
                            <a href="index.html">Inicio</a>
                        </li>
                        <li>
                            <a href="shop.html">Invitaciones con foto</a>
                        </li>
                        <li>
                            <a href="single-product.html">Grabado Laser</a>
                        </li>
                        <li>
                            <a href="cart.html">Invitaciones de Boda</a>
                        </li>
                        <li>
                            <a href="checkout.html">Invitaciones de XV años</a>
                        </li>
                        <li>
                            <a href="#">Invitaciones de Niños</a>
                        </li>
                        <li>
                            <a href="#">Contactanos</a>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam
                            laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque
                            ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni
                            at?
                        </p>
                        <div class="footer-social">
                            <a href="#" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fa fa-youtube"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fa fa-linkedin"></i>
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
</body>

</html>