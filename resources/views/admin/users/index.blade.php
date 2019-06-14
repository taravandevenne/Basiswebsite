@extends('layouts.admin')
@section('content')
    @if(Session::has('deleted_user'))
        <p class="bg-danger text-white">{{session('deleted_user')}}</p>
    @endif

    <h1>Users</h1>

    <a href="{{route('users.create')}}"> <button class="btn btn-success"><i class="fas fa-plus"></i> Create User</button></a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th></th>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Role</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Active</th>
            <th scope="col">Password</th>

            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
                <tr>
                    <td><a href="{{route('users.edit', $user->id)}}"><button class="btn btn-info"><i class="fas fa-edit"></i> Edit</button></a></td>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->role ? $user->role->role : "Customer"}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->active == 1 ? 'Active' : 'Not active'}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 d-flex justify-content-center">
            {{$users -> render()}}
        </div>
    </div>
@endsection
