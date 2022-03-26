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
                <form method="post" action="{{ route('buyers.update', ['order'=>$buyers->id]) }}" >
    @csrf
    <input type="hidden" name="_method" value="PUT">
        <div class="row">
        <x-adminlte-input name="invoice" label="Invoice Number" fgroup-class="col-md-6" />
        <x-adminlte-input name="date" label="Purchase Date" fgroup-class="col-md-6"  />
        <x-adminlte-input name="notes" label="Notes" fgroup-class="col-md-6"  />
        <x-adminlte-button type="Submit" label="Submit" />
        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop