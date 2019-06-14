@extends('layouts.admin')
@section('content')
    @if(Session::has('deleted_tattoo'))
        <p class="bg-danger text-white">{{session('deleted_tattoo')}}</p>
    @endif

    <h1>Tattoos</h1>

    <a href="{{route('tattoos.create')}}"> <button class="btn btn-success"><i class="fas fa-plus"></i> Create Tattoo</button></a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th></th>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Artist</th>
            <th scope="col">Price</th>
            <th scope="col">Advance</th>
            <th scope="col">File</th>

            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
        </tr>
        </thead>
        <tbody>
        @if($tattoos)
            @foreach($tattoos as $tattoo)
                <tr>
                    <td><a href="{{route('tattoos.edit', $tattoo->id)}}"><button class="btn btn-info"><i class="fas fa-edit"></i> Edit</button></a></td>
                    <td>{{$tattoo->id}}</td>
                    <td>{{$tattoo->name}}</td>
                    <td>{{$tattoo->artist_id ? $tattoo->artist->name : "No artist"}}</td>
                    <td>{{$tattoo->price}}</td>
                    <td>{{$tattoo->advance_id ? $tattoo->advance->amount : "No amount"}}</td>
                    <td><img height="50" src="{{$tattoo->photo ? asset($tattoo->photo->file) : 'http://placehold.it/400x400'}}" alt=""></td>
                    <td>{{$tattoo->created_at}}</td>
                    <td>{{$tattoo->updated_at}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 d-flex justify-content-center">
            {{$tattoos -> render()}}
        </div>
    </div>
@endsection
