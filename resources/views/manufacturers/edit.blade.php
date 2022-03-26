@extends('adminlte::page')

@section('title', 'Edit Manufacturer')

@section('content_header')
    <h1>Edit Manufacturer</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-body">              
                <form method="post" action="{{ route('manufacturers.update', ['manufacturer'=>$manufacturers->id]) }}" >
    @csrf
    <input type="hidden" name="_method" value="PUT">
        <div class="row">
        <x-adminlte-input name="name" label="Name" value="{{ old('name', $manufacturers->name) }}" fgroup-class="col-md-6" />
        <x-adminlte-input name="sales" label="Sales Contact" value="{{ old('sales', $manufacturers->sales) }}" fgroup-class="col-md-6"  />
        <x-adminlte-input name="tech" label="Tech Support" value="{{ old('tech', $manufacturers->tech) }}" fgroup-class="col-md-6"  />
        <x-adminlte-select name="hardware_id" label="Hardware" value="{{ old('hardware_id', $manufacturers->hardware_id) }}" fgroup-class="col-md-6">
        @foreach($hardware AS $hardware)   
        <option>{{$hardware->id.' '.$hardware->name }}</option>
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