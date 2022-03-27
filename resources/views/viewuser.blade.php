@extends('adminlte::page')

@section('title', 'View By User')

@section('content_header')
    <h1>View By User</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
            </div>
            <div class="card-body">
                @foreach($buyers AS $buyer)
                <li><b>User's Name:</b><a href="{{ route('buyers.show', ['buyer'=>$buyer->id]) }}">{{ $buyer->first}} {{ $buyer->last }}</a> | 
                <b>Hardware ID:</b><a href="{{ route('hardware.show', ['hardware'=>$buyer->hardware_id]) }}">{{ $buyer->hardware_id }}</a></li>
                @endforeach

            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop