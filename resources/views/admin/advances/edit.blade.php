@extends('layouts.admin')
@section('content')

    <a href="{{route('advances.index')}}"> <button class="btn btn-success mb-5"><i class="fas fa-users"></i> All Advances</button></a>

    <h1>Edit Advance</h1>

    {!! Form::model($advance,['method'=>'PATCH', 'action'=> ['AdminAdvancesController@update', $advance->id]])!!}

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


    @include('includes.form_error')

    <div class="form-group">
        {!!Form::submit('Update Advance', ['class'=>'btn btn-primary col-md-1'])!!}
    </div>

    {!!Form::close()!!}



    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminAdvancesController@destroy', $advance->id]]) !!}
    <div class="form-group">
        {!! Form::submit('Delete Advance', ['class'=>'btn btn-danger col-md-1']) !!}
    </div>
    {!!Form::close() !!}


@endsection
