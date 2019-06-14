@extends('layouts.admin')
@section('content')

    <a href="{{route('users.index')}}"> <button class="btn btn-success mb-5"><i class="fas fa-users"></i> All Users</button></a>

    <h1>Edit User</h1>

    {!! Form::model($user,['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id]])!!}

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


    @include('includes.form_error')

    <div class="form-group">
        {!!Form::submit('Update User', ['class'=>'btn btn-primary col-md-1'])!!}
    </div>

    {!!Form::close()!!}



    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}
    <div class="form-group">
        {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-md-1']) !!}
    </div>
    {!!Form::close() !!}


@endsection
