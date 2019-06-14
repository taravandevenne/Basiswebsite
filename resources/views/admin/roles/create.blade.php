@extends('layouts.admin')
@section('content')

    <a href="{{route('roles.index')}}"> <button class="btn btn-success mb-5"><i class="fas fa-users"></i> All Roles</button></a>

    <h1>Create Role</h1>

    {!! Form::open(['method'=>'POST', 'action'=> 'AdminRolesController@store', 'files'=>true])!!}

    <div class="form-group">
        {!! Form::label('role','Role:')!!}
        {!! Form::text('role', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!!Form::submit('Create Role', ['class'=>'btn btn-primary'])!!}
    </div>

    {!!Form::close()!!}
    @include('includes.form_error')
@endsection
