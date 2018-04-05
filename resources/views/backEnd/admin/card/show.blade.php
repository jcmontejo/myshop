@extends('backLayout.app')
@section('title')
Card
@stop

@section('content')

    <h1>Card</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Title</th><th>Description</th><th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $card->id }}</td> <td> {{ $card->title }} </td><td> {{ $card->description }} </td><td> {{ $card->price }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection