@extends('adminlte::page')

@section('title', 'New User')

@section('content_header')
    <h1>New User</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-body">              
                <form method="post" action="{{ route('buyers.store') }}" >
    @csrf
        <div class="row">

        <x-adminlte-input name="first" label="First Name" fgroup-class="col-md-6" />
        <x-adminlte-input name="last" label="Last Name" fgroup-class="col-md-6"  />
        <x-adminlte-input name="email" label="Email" fgroup-class="col-md-6"  />
        <x-adminlte-input name="phone" label="Phone Number" fgroup-class="col-md-6"  />
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