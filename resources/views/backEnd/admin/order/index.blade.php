@extends('backLayout.app') @section('title') Ordenes @stop @section('content')

<h1>Ordenes {{--
    <a href="{{ url('admin/order/create') }}" class="btn btn-primary pull-right btn-sm">Add New Order</a> --}}
</h1>
<div class="box">
    <div class="box-header">
        <h3 class="box-title"></h3>
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
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order as $item)
                    @include('backEnd.admin.order.details')
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
                            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#modal-default">
                                Ver detalles
                            </button>
                            {{-- <a href="{{ url('admin/order/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Detalles</a> --}}
                            {{-- {!! Form::open([ 'method'=>'DELETE', 'url' => ['admin/order', $item->id], 'style' => 'display:inline' ]) !!} {!! Form::submit('Delete',
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
</div>

@endsection @section('js')
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