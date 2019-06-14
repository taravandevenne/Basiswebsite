@extends('layouts.admin')
@section('content')
    @if(Session::has('deleted_role'))
        <p class="bg-danger text-white">{{session('deleted_role')}}</p>
    @endif

    <h1>Users</h1>

    <a href="{{route('roles.create')}}"> <button class="btn btn-success"><i class="fas fa-plus"></i> Create Role</button></a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th></th>
            <th scope="col">Id</th>
            <th scope="col">Role</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
        </tr>
        </thead>
        <tbody>
        @if($roles)
            @foreach($roles as $role)
                <tr>
                    <td><a href="{{route('roles.edit', $role->id)}}"><button class="btn btn-info"><i class="fas fa-edit"></i> Edit</button></a></td>
                    <td>{{$role->id}}</td>
                    <td>{{$role->role }}</td>
                    <td>{{$role->created_at}}</td>
                    <td>{{$role->updated_at}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 d-flex justify-content-center">
            {{$roles -> render()}}
        </div>
    </div>
@endsection
