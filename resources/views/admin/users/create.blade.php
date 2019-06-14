@extends('layouts.admin')
@section('content')

    <a href="{{route('users.index')}}"> <button class="btn btn-success mb-5"><i class="fas fa-users"></i> All Users</button></a>

    <h1>Create User</h1>

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store', 'files'=>true])!!}

    <div class="form-group">
        {!! Form::label('name','Name:')!!}
        {!! Form::text('name', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id','Role:')!!}
        {!! Form::select('role_id', [''=>'Choose Options'] + $roles, null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('email','E-mail:')!!}
        {!! Form::email('email', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('phone','Phone:')!!}
        {!! Form::text('phone', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('active','Status:')!!}
        {!! Form::select('active', array(1 => 'Active', 0 => 'Not Active'), 0, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('password','Password:')!!}
        {!! Form::password('password', ['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
        {!!Form::submit('Create User', ['class'=>'btn btn-primary'])!!}
    </div>

    {!!Form::close()!!}
    @include('includes.form_error')
@endsection
