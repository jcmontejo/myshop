@extends('adminlte::page') @section('title', 'Sanchez Invitaciones') @section('content_header')
<h1>Dashboard</h1>
@stop @section('content')

<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>150</h3>

                <p>Nuevas Ordenes</p>
            </div>
            <div class="icon">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info
                <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>53
                    <sup style="font-size: 20px">%</sup>
                </h3>

                <p>Ventas de la semana</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info
                <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>44</h3>

                <p>Usuarios registrados</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info
                <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>$6500</h3>

                <p>Ventas del día</p>
            </div>
            <div class="icon">
                <i class="fa fa-money"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info
                <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->
<!-- /.box-header -->
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Ordenes</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table table-responsive">
            <table class="table table-bordered table-striped table-hover" id="order">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre del Cliente</th>
                        <th>Apellidos del cliente</th>
                        <th>Apellidos del Cliente</th>
                        <th>Teléfono de Contacto</th>
                        <th>Total de invitaciones</th>
                        <th>Fecha de Entrega</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order as $item) @include('backEnd.admin.order.details')
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>
                            <a href="{{ url('admin/order', $item->id) }}">{{ $item->billing_first_name }}</a>
                        </td>
                        <td>{{ $item->billing_last_name }}</td>
                        <td>{{ $item->billing_address_1 }}</td>
                        <td>{{ $item->billing_phone }}</td>
                        <td>{{$item->number_cards}}</td>
                        <td>{{$item->order_date}}</td>
                        <td>
                            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal-default">
                                Ver detalles
                            </button>
                            {{-- <a href="{{ url('admin/order/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Detalles</a>
                            {!! Form::open([ 'method'=>'DELETE', 'url' => ['admin/order', $item->id], 'style' => 'display:inline' ]) !!} {!! Form::submit('Delete',
                            ['class' => 'btn btn-danger btn-xs']) !!} {!! Form::close() !!} --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    @stop @section('js')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#order').DataTable({
                columnDefs: [{
                    targets: [0],
                    visible: false,
                    searchable: false
                }, ],
                order: [
                    [0, "asc"]
                ],
            });
        });
    </script>
    @endsection