@extends('adminlte::page')

@section('title', 'title')

@section('content_header')
    <h1>Hardware</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <a class ="btn btn-primary float-right">Add Hardware</a>
            </div>
            <div class="card-body">
                Hardware
                @foreach($hardware)
                    <li><a href="{{ route('hardware.show',['hardware'=>$hardware->id]) }} "></a>
                @endforeach
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop