@extends('adminlte::page')

@section('title', 'Edit Hardware')

@section('content_header')
    <h1>Edit Hardware</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-body">              
                <form method="post" action="{{ route('hardware.update', ['hardware'=>$hardware->id]) }}" >
    @csrf
        <div class="row">

        <x-adminlte-input name="name" label="Name" fgroup-class="col-md-6"  />
        <x-adminlte-select name="type" label="Type" fgroup-class="col-md-6">
        <option>Desktop</option>
        <option>Laptop</option>
        <option>Tablet</option>
        </x-adminlte-select>

        <x-adminlte-select name="os" label="OS" fgroup-class="col-md-6">
        <option>Windows</option>
        <option>MacOS</option>
        <option>Linux</option>
        <option>Android</option>
        <option>iOS</option>
        </x-adminlte-select>

        <x-adminlte-input name="cpu" label="CPU" fgroup-class="col-md-6"  />
        <x-adminlte-input name="gpu" label="GPU" fgroup-class="col-md-6"  />
    
        <x-adminlte-select name="storage" label="Storage" fgroup-class="col-md-6">
        <option>60GB</option>
        <option>120GB</option>       
        <option>250GB</option>
        <option>500GB</option>
        <option>1TB</option>
        <option>2TB</option>
        </x-adminlte-select>

        <x-adminlte-select name="ram" label="RAM" fgroup-class="col-md-6">
        <option>4GB</option>
        <option>8GB</option>
        <option>16GB</option>
        </x-adminlte-select>

        <x-adminlte-input name="price" label="Price" fgroup-class="col-md-6"  />
        <x-adminlte-button type="Submit" label="Submit" />
        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop