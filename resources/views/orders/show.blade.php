@extends('adminlte::page')

@section('title', 'Order')

@section('content_header')
    <h1>Order</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-default">
        <div class="card-header">
                <a href="{{ route('orders.edit', ['order'=>$orders->id]) }}" class="btn btn-primary float-right">Edit</a>   
        </div>
        <form method="POST" action="{{ route('orders.destroy', ['order'=>$orders->id]) }}" >
            @method('DELETE')
            @csrf
            <div class="card-body">
                {{ $orders->invoice }} | 
                <b>Date:</b> {{ $orders->date }} |
                <b>Notes:</b> {{ $orders->notes }} |
                
            </div>
        <button type="submit" class="btn btn-primary">DELETE</button>
        </form>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>
@stop