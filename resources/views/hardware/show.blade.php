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
                <a href="{{ route('hardware.edit',  ['hardware'=>$hardware->id]) }}" class="btn btn-primary float-right">Edit</a>   
        </div>
        <form method="POST" action="{{ route('hardware.destroy',  ['hardware'=>$hardware->id]) }}" >
            @method('DELETE')
            @csrf
            <div class="card-body">
                {{ $hardware->name }} | 
                <b>Type:</b> {{ $hardware->type }} |
                <b>OS:</b> {{ $hardware->os }} |
                <b>CPU:</b> {{ $hardware->cpu }} |
                <b>GPU:</b> {{ $hardware->gpu }} |
                <b>Storage:</b> {{ $hardware->storage }} |
                <b>RAM:</b> {{ $hardware->ram }} |
                <b>Price:</b> {{ $hardware->price }} 
            </div>
        <button type="submit" class="btn btn-primary">DELETE</button>
        </form>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>
@stop