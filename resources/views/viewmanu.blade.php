@extends('adminlte::page')

@section('title', 'Manufacturers')

@section('content_header')
    <h1>Manufacturers</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <a href="{{ route('manufacturers.create') }}" class="btn btn-primary float-right">Add Manufacturer</a>
            </div>
            <div class="card-body">
                @foreach($manufacturers AS $manufacturer)
                @foreach($hardware AS $hardware)
               
                <li><a href="{{ route('manufacturers.show', ['manufacturer'=>$manufacturer->id]) }}">{{ $manufacturer->name }}</a> | 
                <b>Hardware:</b><a href="{{ route('hardware.show', ['hardware'=>$hardware->id]) }}">{{ $hardware->id.' '.$hardware->name }}</a></li>
                
                @endforeach
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