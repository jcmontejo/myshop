@extends('backLayout.app')
@section('title')
Edit Order
@stop

@section('content')

    <h1>Edit Order</h1>
    <hr/>

    {!! Form::model($order, [
        'method' => 'PATCH',
        'url' => ['admin/order', $order->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('billing_first_name') ? 'has-error' : ''}}">
                {!! Form::label('billing_first_name', 'Billing First Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('billing_first_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('billing_first_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('billing_last_name') ? 'has-error' : ''}}">
                {!! Form::label('billing_last_name', 'Billing Last Name: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('billing_last_name', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('billing_last_name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('billing_address_1') ? 'has-error' : ''}}">
                {!! Form::label('billing_address_1', 'Billing Address 1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('billing_address_1', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('billing_address_1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('billing_city') ? 'has-error' : ''}}">
                {!! Form::label('billing_city', 'Billing City: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('billing_city', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('billing_city', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('billing_postcode') ? 'has-error' : ''}}">
                {!! Form::label('billing_postcode', 'Billing Postcode: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('billing_postcode', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('billing_postcode', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('billing_email') ? 'has-error' : ''}}">
                {!! Form::label('billing_email', 'Billing Email: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::email('billing_email', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('billing_email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('billing_phone') ? 'has-error' : ''}}">
                {!! Form::label('billing_phone', 'Billing Phone: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('billing_phone', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('billing_phone', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('order_comments') ? 'has-error' : ''}}">
                {!! Form::label('order_comments', 'Order Comments: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('order_comments', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('order_comments', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('order_color_card') ? 'has-error' : ''}}">
                {!! Form::label('order_color_card', 'Order Color Card: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('order_color_card', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('order_color_card', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('order_color_letter') ? 'has-error' : ''}}">
                {!! Form::label('order_color_letter', 'Order Color Letter: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('order_color_letter', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('order_color_letter', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('order_date') ? 'has-error' : ''}}">
                {!! Form::label('order_date', 'Order Date: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('order_date', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('order_date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
                {!! Form::label('total', 'Total: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('total', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('card') ? 'has-error' : ''}}">
                {!! Form::label('card', 'Card: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('card', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('card', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                {!! Form::label('status', 'Status: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('status', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection