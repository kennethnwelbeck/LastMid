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
                Hardware
                @foreach($hardware AS $hardware)
                    <li>{{ $hardware->name }} | 
                <b>Type:</b> {{ $hardware->type }} |
                <b>OS:</b> {{ $hardware->os }} |
                <b>CPU:</b> {{ $hardware->cpu }} |
                <b>GPU:</b> {{ $hardware->gpu }} |
                <b>Storage:</b> {{ $hardware->storage }} |
                <b>RAM:</b> {{ $hardware->ram }} |
                <b>Price:</b> {{ $hardware->price }}</li>
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