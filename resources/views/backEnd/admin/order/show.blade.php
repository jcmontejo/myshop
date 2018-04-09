@extends('backLayout.app')
@section('title')
Order
@stop

@section('content')

    <h1>Order</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Billing First Name</th><th>Billing Last Name</th><th>Billing Address 1</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $order->id }}</td> <td> {{ $order->billing_first_name }} </td><td> {{ $order->billing_last_name }} </td><td> {{ $order->billing_address_1 }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection