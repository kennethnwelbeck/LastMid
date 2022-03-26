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
        <form method="POST" action="{{ route('buyers.destroy', ['order'=>$buyers->id]) }}" >
            @method('DELETE')
            @csrf
            <div class="card-body">
                {{ $buyers->}} | 
                <b>Name:</b> {{ $buyers->date }} {{ $buyers->last }}  |
                <b>Email:</b> {{ $buyers->email }} |  <b>Phone:</b> {{ $buyers->phone }} |
            
s            </div>
        <button type="submit" class="btn btn-primary">DELETE</button>
        </form>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>
@stop