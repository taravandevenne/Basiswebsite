@extends('layouts.admin')
@section('content')

    <a href="{{route('tattoos.index')}}"> <button class="btn btn-success mb-5"><i class="fas fa-users"></i> All Tattoos</button></a>

    <h1>Edit Tattoo</h1>

    {!! Form::model($tattoo,['method'=>'PATCH', 'action'=> ['AdminTattoosController@update', $tattoo->id], 'files'=>true])!!}

    <div class="row">
        <div class="col-md-3">
            <img class="img-responsive" src="{{$tattoo->photo ? asset($tattoo->photo->file) : 'http://place-hold.it/400x400'}}"
                 alt="">
        </div>
        <div class="col-md-9">
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


    @include('includes.form_error')

    <div class="form-group">
        {!!Form::submit('Update Tattoo', ['class'=>'btn btn-primary col-md-1'])!!}
    </div>


    {!!Form::close()!!}



    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminTattoosController@destroy', $tattoo->id]]) !!}
    <div class="form-group">
        {!! Form::submit('Delete Tattoo', ['class'=>'btn btn-danger col-md-1']) !!}
    </div>
    {!!Form::close() !!}
        </div>
    </div>

@endsection
