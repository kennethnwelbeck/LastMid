@extends('adminlte::page')

@section('title', 'Edit Order')

@section('content_header')
    <h1>Edit Order</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-body">              
                <form method="post" action="{{ route('orders.update', ['order'=>$orders->id]) }}" >
    @csrf
    <input type="hidden" name="_method" value="PUT">
        <div class="row">
        <x-adminlte-input name="invoice" value="{{ old('invoice', $orders->invoice) }}" label="Invoice Number" fgroup-class="col-md-6" />
        <x-adminlte-input name="date" value="{{ old('date', $orders->date) }}" label="Purchase Date" fgroup-class="col-md-6"  />
        <x-adminlte-select name="buyer_id" label="User" fgroup-class="col-md-6" value="{{ old('buyer_id', $orders->buyer_id) }}" >    
        @foreach($buyers AS $buyer)
        <option value="{{ $buyer->id }}" {{ $orders->buyer_id == $buyer->id ? "selected" : ""}}> {{ $buyer->id.' '.$buyer->first.' '.$buyer->last }} </option>
        @endforeach
        </x-adminlte-select>
        <x-adminlte-select name="hardware_id" label="Hardware" fgroup-class="col-md-6" value="{{ old('hardware_id', $orders->hardware_id) }}" >    
        @foreach($hardware AS $hardware)
        <option value="{{ $hardware->id }}" {{ $orders->hardware_id == $hardware->id ? "selected" : "" }}> {{$hardware->id.' '.$hardware->name }} </option>
        @endforeach
        </x-adminlte-select>
        <x-adminlte-button type="Submit" label="Submit" />
        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop