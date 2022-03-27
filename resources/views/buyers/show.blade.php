@extends('adminlte::page')

@section('title', 'User')

@section('content_header')
    <h1>User</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
        <div class="card-header">
                <a href="{{ route('buyers.edit', ['buyer'=>$buyers->id]) }}" class="btn btn-primary float-right">Edit</a>   
        </div>
        <form method="POST" action="{{ route('buyers.destroy', ['buyer'=>$buyers->id]) }}" >
            @method('DELETE')
            @csrf
            <div class="card-body">
                <b>Name:</b> {{ $buyers->first}} {{ $buyers->last }}  |
                <b>Email:</b> {{ $buyers->email }} |  <b>Phone:</b> {{ $buyers->phone }} |
                @if($manufacturers->hardware_id != NULL)
                @foreach($hardware AS $hardware)
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