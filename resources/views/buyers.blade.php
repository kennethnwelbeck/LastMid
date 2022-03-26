@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
            <div class="card-header">
                <a href="{{ route('buyers.create') }}" class="btn btn-primary float-right">Add User</a>
            </div>
            <div class="card-body">
                @foreach($buyers AS $buyer)
                <li><a href="{{ route('buyers.show', ['buyer'=>$buyer->id]) }}">{{ $buyer->name }}</a></li>
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