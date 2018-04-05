@extends('backLayout.app') @section('title') Edit Card @stop @section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Editar Tarjeta</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        {!! Form::model($card, [ 'method' => 'PATCH', 'url' => ['admin/card', $card->id], 'class' => 'form-horizontal' ]) !!}

        <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
            {!! Form::label('title', 'Titulo: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('title', null, ['class' => 'input-lg form-control', 'required' => 'required']) !!} {!! $errors->first('title', '
                <p
                    class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
            {!! Form::label('description', 'Descripción: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::textarea('description', null, ['class' => 'input-lg form-control', 'required' => 'required']) !!} {!! $errors->first('description',
                '
                <p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
            {!! Form::label('price', 'Precio: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::number('price', null, ['class' => 'input-lg form-control', 'required' => 'required']) !!} {!! $errors->first('price', '
                <p
                    class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
            {!! Form::label('image', 'Imagen: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::text('image', null, ['class' => 'input-lg form-control', 'required' => 'required']) !!} {!! $errors->first('image', '
                <p
                    class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
            {!! Form::label('category', 'Categoría: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                {!! Form::select('category', $categorys,null, ['class' => 'input-lg form-control', 'required' => 'required']) !!} {!! $errors->first('category',
                '
                <p class="help-block">:message</p>') !!}
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