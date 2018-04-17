@extends('layouts.front') @section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Invitaciones INFANTILES</h2>
                    <div class="jumbotron">
                        {{--
                        <h1>Hello, world!</h1> --}}
                        <p>
                            Escoge la invitación de cumpleaños infantil, bautizo, comunión, confirmación, baby shower que más te guste entre la desena
                            de diseños y personalízala hasta adaptarla a las necesidades de tu evento. Invitación muy coloridas,
                            que transmitan alegría en las que se debe especificar el nombre del celebrante, la fecha y la
                            hora del evento, así como el lugar donde se va a llevar a cabo la fiesta. Las tarjetas con dibujos
                            que sus pequeños le sea de su agrado.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            @foreach($bodas as $item)
            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">
                    <div class="product-upper">
                        <img src="{{asset('uploads')}}/{{$item->image}}" alt="">
                    </div>
                    <h2>
                        <a href="">{{$item->title}}</a>
                    </h2>
                    <div class="product-carousel-price">
                        <ins>${{number_format($item->price)}}</ins>
                        <del>$00.00</del>
                    </div>

                    <div class="product-option-shop">
                        <a class="add_to_cart_button" href="{{url('single-product')}}/{{$item->id}}">Comprar</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection