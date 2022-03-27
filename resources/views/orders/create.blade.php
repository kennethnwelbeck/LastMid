@extends('adminlte::page')

@section('title', 'New Order')

@section('content_header')
    <h1>New Order</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-body">              
                <form method="post" action="{{ route('orders.store') }}" >
    @csrf
        <div class="row">

        <x-adminlte-input name="invoice" label="Invoice Number" fgroup-class="col-md-6" />
        <x-adminlte-input name="date" label="Purchase Date" fgroup-class="col-md-6"  />
        <x-adminlte-select name="buyers_id" label="User" fgroup-class="col-md-6" >    
        @foreach($buyers AS $buyer)
        <option value="{{ $buyer->id }}"> {{ $buyer->id.' '.$buyer->first.' '.$buyer->last }} </option>
        @endforeach
        </x-adminlte-select>
        <x-adminlte-select name="hardware_id" label="Hardware" fgroup-class="col-md-6" >    
        @foreach($hardware AS $hardware)
        <option value="{{ $hardware->id }}"> {{$hardware->id.' '.$hardware->name }} </option>
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