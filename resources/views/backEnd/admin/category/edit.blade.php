@extends('backLayout.app') @section('title') Editar Categoria @stop @section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Editar Categoria</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        {!! Form::model($category, [ 'method' => 'PATCH', 'url' => ['admin/category', $category->id], 'class' => 'form-horizontal'
        ]) !!}

        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            {!! Form::label('name', 'Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('name', null, ['class' => 'input-lg form-control', 'required' => 'required']) !!} {!! $errors->first('name', '
                <p
                    class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
            {!! Form::label('slug', 'Slug: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('slug', null, ['class' => 'input-lg form-control', 'required' => 'required']) !!} {!! $errors->first('slug', '
                <p
                    class="help-block">:message</p>') !!}
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-3">
                {!! Form::submit('Actualizar', ['class' => 'btn btn-primary form-control']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

@if ($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif @endsection