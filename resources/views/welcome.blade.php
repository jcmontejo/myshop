@extends('layouts.front') @section('content')
<div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <li>
                <img src="{{asset('front/img/slider_6.jpg')}}" style="filter: opacity(0.49) ;

    -webkit-filter: opacity(0.49) ;

    -moz-filter: opacity(0.49) ;" alt="Slide">
                <div class="caption-group">
                    <h2 style="color:#ff637d;" class="caption title">
                        Invitaciones
                        <span class="primary">de
                            <strong>Boda</strong>
                        </span>
                    </h2>
                </div>
            </li>
            <li>
                <img src="{{asset('front/img/slider_2.jpg')}}" style="filter: opacity(0.49) ;

    -webkit-filter: opacity(0.49) ;

    -moz-filter: opacity(0.49) ;" alt="Slide">
                <div class="caption-group">
                    <h2 style="color:#ff637d;" class="caption title">
                        Invitaciones para fiestas infantiles
                        <span class="primary">50%
                            <strong>off</strong>
                        </span>
                    </h2>
                </div>
            </li>
            <li>
                <img src="{{asset('front/img/slider_10.jpg')}}" style="filter: opacity(0.49) ;

    -webkit-filter: opacity(0.49) ;

    -moz-filter: opacity(0.49) ;" alt="Slide">
                <div class="caption-group">
                    <h2 style="color:#ff637d;" class="caption title">
                        Invitaciones
                        <span class="primary">de
                            <strong>Cumpleaños</strong>
                        </span>
                    </h2>
                </div>
            </li>
            <li>
                <img src="{{asset('front/img/slider_8.jpg')}}" style="filter: opacity(0.49) ;

    -webkit-filter: opacity(0.49) ;

    -moz-filter: opacity(0.49) ;" alt="Slide">
                <div class="caption-group">
                    <h2 style="color:#ff637d;" class="caption title">
                        Invitaciones
                        <span class="primary">de
                            <strong>Baby shower</strong>
                        </span>
                    </h2>
                </div>
            </li>
        </ul>
    </div>
    <!-- ./Slider -->
</div>
<!-- End slider area -->

<div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo1">
                    <i class="fa fa-birthday-cake"></i>
                    <p>Elije tu invitación</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo2">
                    <i class="fa fa-edit"></i>
                    <p>Personaliza</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo3">
                    <i class="fa fa-credit-card"></i>
                    <p>Realiza tu pago</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo promo4">
                    <i class="fa fa-gift"></i>
                    <p>Recoje tu invitación</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End promo area -->

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Ultimos Diseños</h2>
                    <div class="product-carousel">
                        @foreach($cards as $item)
                        <div class="single-product">
                            <div class="product-f-image">
                                <img src="{{asset('uploads')}}/{{$item->image}}" alt="">
                                <div class="product-hover">
                                    <a href="{{url('single-product')}}/{{$item->id}}" class="add-to-cart-link">
                                        <i class="fa fa-shopping-cart"></i> Comprar</a>
                                    {{-- <a href="single-product.html" class="view-details-link">
                                        <i class="fa fa-link"></i> See details</a> --}}
                                </div>
                            </div>

                            <h2>
                                <a href="#">{{$item->title}}</a>
                            </h2>

                            <div class="product-carousel-price">
                                <ins>${{number_format($item->price)}}</ins>
                                <del>$00.00</del>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End main content area -->
@endsection