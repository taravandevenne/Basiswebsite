@extends('layouts.admin')
@section('content')

    <a href="{{route('artists.index')}}"> <button class="btn btn-success mb-5"><i class="fas fa-users"></i> All Artists</button></a>

    <h1>Create Artist</h1>

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminArtistsController@store', 'files'=>true])!!}

    <div class="form-group">
        {!! Form::label('name','Name:')!!}
        {!! Form::text('name', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('style','Style:')!!}
        {!! Form::text('style', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('started','Started at:')!!}
        {!! Form::text('started', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('info','Info:')!!}
        {!! Form::text('info', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('avatar_id','Photo:')!!}
        {!! Form::file('avatar_id', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!!Form::submit('Create Artist', ['class'=>'btn btn-primary'])!!}
    </div>

    {!!Form::close()!!}
    @include('includes.form_error')
@endsection
