@extends('adminlte::page')

@section('title', 'Hardware')

@section('content_header')
    <h1>Hardware</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <a href="{{ route('hardware.create') }}" class="btn btn-primary float-right">Add Hardware</a>
            </div>
            <div class="card-body">
                @foreach($hardware AS $hardware)
                <li><a href="{{ route('hardware.show', [$hardware->name]) }} "></a></li>
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