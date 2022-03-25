@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
        <div class="card-header">
                <a href="{{ route('manufacturers.edit', ['manufacturer'=>$manufacturer->id]) }}" class="btn btn-primary float-right">Edit</a>   
        </div>
        <form method="POST" action="{{ route('manufacturers.destroy', ['manufacturer'=>$manufacturer->id]) }}" >
            @method('DELETE')
            @csrf
            <div class="card-body">
                {{ $manufacturer->name }} | 
                <b>Sales:</b> {{ $manufacturer->sales }} |
                <b>Tech Support:</b> {{ $manufacturer->tech }} |
            </div>
        <button type="submit" class="btn btn-primary">DELETE</button>
        </form>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>
@stop