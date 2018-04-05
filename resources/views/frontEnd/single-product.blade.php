@extends('layouts.front') @section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Detalle de compra</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>

            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="product-breadcroumb">
                        <a href="">Inicio</a>
                        <a href="">Tarjetas</a>
                        <a href="">{{$card->title}}</a>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="product-images">
                                <div class="product-main-img">
                                    <img src="{{asset('uploads')}}/{{$card->image}}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="product-inner">
                                <h2 class="product-name">{{$card->title}}</h2>
                                <div class="product-inner-price">
                                    <ins>${{number_format($card->price)}}</ins>
                                    <del>$00.00</del>
                                </div>

                                {!! Form::open(['url' => 'process', 'class' => 'cart']) !!}
                                    <div class="quantity">
                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                    <input type="hidden" name="card" value="{{$card->id}}">
                                    </div>
                                    <button class="add_to_cart_button" type="submit">Procesar compra</button>
                                {!! Form::close() !!}
                                <div role="tabpanel">
                                    <ul class="product-tab" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Descripción</a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Recomendar</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <h2>Descripción de la tarjeta</h2>
                                            <p>{{$card->description}}.</p>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="profile">
                                            <h2>Recomendar</h2>
                                            <div class="submit-review">
                                                <p>
                                                    <label for="name">Nombre</label>
                                                    <input name="name" type="text">
                                                </p>
                                                <p>
                                                    <label for="email">Correo Electrónico</label>
                                                    <input name="email" type="email">
                                                </p>
                                                <div class="rating-chooser">
                                                    <p>Estrellas</p>

                                                    <div class="rating-wrap-post">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <p>
                                                    <label for="review">Tu comentario</label>
                                                    <textarea name="review" id="" cols="30" rows="10"></textarea>
                                                </p>
                                                <p>
                                                    <input type="submit" value="Enviar">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection