@extends('app')
@section('content')
<h1>Create New Asset</h1>
    {!! Form::open(['url' => 'assets']) !!}

       <div class="form-group">
        {!! Form::select('customer_id', $customers) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category', 'Category:') !!}
        {!! Form::text('category',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('acquired_value', 'Acquired Value:') !!}
        {!! Form::text('acquired_value',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('acquired_date', 'Acquired Date:') !!}
        {!! Form::text('acquired_date',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('asset_type', 'Asset Type:') !!}
        {!! Form::text('asset_type',null,['class'=>'form-control']) !!}
    </div>
	<div class="form-group">
        {!! Form::label('salvage_value', 'Salvage Value:') !!}
        {!! Form::text('salvage_value',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop