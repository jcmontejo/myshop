@extends('backLayout.app') @section('title') Categorias @stop @section('content')

<h1>Categorias
    <a href="{{ url('admin/category/create') }}" class="btn btn-primary pull-right btn-sm">Agregar Nueva Categoria</a>
</h1>
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
<div class="box">
    <div class="box-header">
        <h3 class="box-title"></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table table-responsive">
            <table class="table table-bordered table-striped table-hover" id="category">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Slug</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>
                            <a href="{{ url('admin/category', $item->id) }}">{{ $item->name }}</a>
                        </td>
                        <td>{{ $item->slug }}</td>
                        <td>
                            <a href="{{ url('admin/category/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Actualizar</a>
                            {{-- {!! Form::open([ 'method'=>'DELETE', 'url' => ['admin/category', $item->id], 'style' => 'display:inline' ]) !!} {!! Form::submit('Eliminar',
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
        $('#category').DataTable({
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