@extends('layouts.admin')
@section('content')

    <a href="{{route('artists.index')}}"> <button class="btn btn-success mb-5"><i class="fas fa-users"></i> All Artists</button></a>

    <h1>Edit Artist</h1>

    {!! Form::model($artist,['method'=>'PATCH', 'action'=> ['AdminArtistsController@update', $artist->id], 'files'=>true])!!}

    <div class="row">
        <div class="col-md-3">
            <img class="img-responsive" src="{{$artist->avatar ? asset($artist->avatar->file) : 'http://place-hold.it/400x400'}}" alt="">
        </div>

        <div class="col-md-9">
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


    @include('includes.form_error')

    <div class="form-group">
        {!!Form::submit('Update Artist', ['class'=>'btn btn-primary col-md-1'])!!}
    </div>

    {!!Form::close()!!}



    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminArtistsController@destroy', $artist->id]]) !!}
    <div class="form-group">
        {!! Form::submit('Delete Artist', ['class'=>'btn btn-danger col-md-1']) !!}
    </div>
    {!!Form::close() !!}
        </div>
    </div>

@endsection
