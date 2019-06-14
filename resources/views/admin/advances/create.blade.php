@extends('layouts.admin')
@section('content')

    <a href="{{route('advances.index')}}"> <button class="btn btn-success mb-5"><i class="fas fa-users"></i> All Advances</button></a>

    <h1>Create Advance</h1>

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminAdvancesController@store', 'files'=>true])!!}

    <div class="form-group">
        {!! Form::label('name','Name:')!!}
        {!! Form::text('name', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('range','Range:')!!}
        {!! Form::text('range', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('amount','Amount:')!!}
        {!! Form::text('amount', null, ['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
        {!!Form::submit('Create Advance', ['class'=>'btn btn-primary'])!!}
    </div>

    {!!Form::close()!!}
    @include('includes.form_error')
@endsection
