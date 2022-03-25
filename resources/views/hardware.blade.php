@extends('adminlte::page')

@section('title', 'title')

@section('content_header')
    <h1>Header</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <a class ="btn btn-primary float-right">+ Add Hardware</a>

    <p>Content here</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop