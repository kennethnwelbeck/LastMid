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
    <input type="hidden" name="_method" value="PUT">
        <div class="row">

        <x-adminlte-input name="name" label="Name"  value="{{ old('name', $hardware->name) }}" fgroup-class="col-md-6"  />
        <x-adminlte-select name="type" label="Type" value="{{ old('type', $hardware->Type) }}" fgroup-class="col-md-6">
        <option>Desktop</option>
        <option>Laptop</option>
        <option>Tablet</option>
        </x-adminlte-select> 

        <x-adminlte-select name="os" label="OS" value="{{ old('os', $hardware->os) }}"fgroup-class="col-md-6">
        <option>Windows</option>
        <option>MacOS</option>
        <option>Linux</option>
        <option>Android</option>
        <option>iOS</option>
        </x-adminlte-select>

        <x-adminlte-input name="cpu" label="CPU" value="{{ old('cpu', $hardware->cpu) }}" fgroup-class="col-md-6"  />
        <x-adminlte-input name="gpu" label="GPU" value="{{ old('gpu', $hardware->gpu) }}" fgroup-class="col-md-6"  />
    
        <x-adminlte-select name="storage" label="Storage" value="{{ old('storage', $hardware->storage) }}" fgroup-class="col-md-6">
        <option>60GB</option>
        <option>120GB</option>       
        <option>250GB</option>
        <option>500GB</option>
        <option>1TB</option>
        <option>2TB</option>
        </x-adminlte-select>

        <x-adminlte-select name="ram" label="RAM" value="{{ old('ram', $hardware->ram) }}" fgroup-class="col-md-6">
        <option>4GB</option>
        <option>8GB</option>
        <option>16GB</option>
        </x-adminlte-select>

        <x-adminlte-input name="price" label="Price" value="{{ old('price', $hardware->price) }}" fgroup-class="col-md-6"  />

        <x-adminlte-textarea name="notes" label="Notes History" value="{{ old('notes', $hardware->notes) }}" fgroup-class="col-md-6" />

        <x-adminlte-button type="Submit" label="Submit" />
        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop