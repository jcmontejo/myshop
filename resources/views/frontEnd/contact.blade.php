@extends('layouts.front') @section('content')
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>CONTACTANOS</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="well well-sm">
                            <form class="form-horizontal" method="post">
                                <fieldset>
                                    <legend class="text-center header">Escribenos un mensaje</legend>
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-1">
                                            <input id="fname" name="name" type="text" placeholder="Nombre completo" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-1">
                                            <input id="lname" name="name" type="text" placeholder="Apellidos" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-1">
                                            <input id="email" name="email" type="text" placeholder="Dirección de correo" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-1">
                                            <input id="phone" name="phone" type="text" placeholder="Teléfono" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-10 col-md-offset-1">
                                            <textarea class="form-control" id="message" name="message" placeholder="Ingrese su masaje aquí. Nos pondremos en contacto con usted dentro de 2 días hábiles."
                                                rows="7"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <div class="panel panel-default">
                                <div class="text-center header">Nos ubicamos</div>
                                <div class="panel-body text-center">
                                    <h4>Matriz</h4>
                                    <div>
                                        Matriz Av. Central Oriente  
                                        <br /> No. 680 (29000) Tuxtla Gutiérrez, Chiapas
                                        <br /> (01 961) 60 00 159
                                        <br /> hola@sanchezinvitaciones.mx
                                        <br />
                                    </div>
                                    <hr />
                                    <div id="map1" class="map">
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