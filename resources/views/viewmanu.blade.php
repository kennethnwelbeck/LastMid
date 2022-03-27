@extends('adminlte::page')

@section('title', 'View By Manufacturer')

@section('content_header')
    <h1>View By Manufacturer</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
            </div>
            <div class="card-body">
                @foreach($manufacturers AS $manufacturer)
                <li><b>Manufacturer Name:</b><a href="{{ route('manufacturers.show', ['manufacturer'=>$manufacturer->id]) }}">{{ $manufacturer->name }}</a> | 
                <b>Hardware ID:</b><a href="{{ route('hardware.show', ['hardware'=>$manufacturer->hardware_id]) }}">{{ $manufacturer->hardware_id }}</a></li>
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