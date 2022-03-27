@extends('adminlte::page')

@section('title', 'Edit User')

@section('content_header')
    <h1>Edit User</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-body">              
                <form method="post" action="{{ route('buyers.update', ['buyer'=>$buyers->id]) }}" >
    @csrf
    <input type="hidden" name="_method" value="PUT">
        <div class="row">
        <x-adminlte-input name="first" label="First Name"  value="{{ old('first', $buyers->first) }}" fgroup-class="col-md-6" />
        <x-adminlte-input name="last" label="Last Name"  value="{{ old('last', $buyers->last) }}" fgroup-class="col-md-6"  />
        <x-adminlte-input name="email" label="Email"  value="{{ old('email', $buyers->email) }}" fgroup-class="col-md-6"  />
        <x-adminlte-input name="phone" label="Phone Number"  value="{{ old('phone', $buyers->phone) }}" fgroup-class="col-md-6"  />
        <x-adminlte-select name="hardware_id" label="Hardware" value="{{ old('hardware_id', $buyers->hardware_id) }}" fgroup-class="col-md-6" >    
        @foreach($hardware AS $hardware)
        <option value="{{ $hardware->id }}" {{ $buyers->hardware_id == $hardware->id ? "selected" : "" }}> {{$hardware->id.' '.$hardware->name }} </option>
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