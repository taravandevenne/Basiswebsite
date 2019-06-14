@extends('layouts.admin')
@section('content')

    <a href="{{route('roles.index')}}"> <button class="btn btn-success mb-5"><i class="fas fa-user-tag"></i> All Roles</button></a>

    <h1>Edit Role</h1>

    {!! Form::model($role,['method'=>'PATCH', 'action'=> ['AdminRolesController@update', $role->id]])!!}

    <div class="form-group">
        {!! Form::label('role','Role:')!!}
        {!! Form::text('role', null, ['class'=>'form-control'])!!}
    </div>

    @include('includes.form_error')

    <div class="form-group">
        {!!Form::submit('Update Role', ['class'=>'btn btn-primary col-md-1'])!!}
    </div>

    {!!Form::close()!!}



    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminRolesController@destroy', $role->id]]) !!}
    <div class="form-group">
        {!! Form::submit('Delete Role', ['class'=>'btn btn-danger col-md-1']) !!}
    </div>
    {!!Form::close() !!}
@endsection
