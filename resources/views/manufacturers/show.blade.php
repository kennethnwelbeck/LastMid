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
                <a href="{{ route('manufacturers.edit', ['manufacturer'=>$manufacturers->id]) }}" class="btn btn-primary float-right">Edit</a>   
        </div>
        <form method="POST" action="{{ route('manufacturers.destroy', ['manufacturer'=>$manufacturers->id]) }}" >
            @method('DELETE')
            @csrf
            <div class="card-body">
                {{ $manufacturers->name }} | 
                <b>Sales:</b> {{ $manufacturers->sales }} |
                <b>Tech Support:</b> {{ $manufacturers->tech }} |
                @if($manufacturers->hardware_id != NULL)
                @foreach(manufacturers->hardware AS $hardware)
                @if($hardware->id == $manufacturers->hardware_id)
                <b>Hardware:</b><a href="{{ route('hardware.show', ['hardware'=>$manufacturers->hardware_id]) }}">{{ $hardware->id.' '.$hardware->name }}</a>
                @endif
                @endforeach
                @endif
            </div>
        <button type="submit" class="btn btn-primary">DELETE</button>
        </form>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>
@stop