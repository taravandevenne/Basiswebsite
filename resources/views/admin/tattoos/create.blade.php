@extends('layouts.admin')
@section('content')

    <a href="{{route('tattoos.index')}}"> <button class="btn btn-success mb-5"><i class="fas fa-users"></i> All Tattoos</button></a>

    <h1>Create Tattoo</h1>

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminTattoosController@store', 'files'=>true])!!}

    <div class="form-group">
        {!! Form::label('name','Name:')!!}
        {!! Form::text('name', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('artist_id','Artist:')!!}
        {!! Form::select('artist_id', [''=>'Choose Options'] + $artists, null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('price','Price:')!!}
        {!! Form::text('price', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('advance_id','Advance:')!!}
        {!! Form::select('advance_id', [''=>'Choose Options'] + $advances, null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('photo_id','Photo:')!!}
        {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!!Form::submit('Create Tattoo', ['class'=>'btn btn-primary'])!!}
    </div>

    {!!Form::close()!!}
    @include('includes.form_error')
@endsection
