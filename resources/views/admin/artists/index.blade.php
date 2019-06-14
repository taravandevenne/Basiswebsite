@extends('layouts.admin')
@section('content')
    @if(Session::has('deleted_artist'))
        <p class="bg-danger text-white">{{session('deleted_artist')}}</p>
    @endif

    <h1>Artists</h1>

    <a href="{{route('artists.create')}}"> <button class="btn btn-success"><i class="fas fa-plus"></i> Create Artist</button></a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th></th>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Avatar</th>
            <th scope="col">Style</th>
            <th scope="col">Started at</th>
            <th scope="col">Info</th>
            <th scope="col">Tattoos</th>

            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
        </tr>
        </thead>
        <tbody>
        @if($artists)
            @foreach($artists as $artist)
                <tr>
                    <td><a href="{{route('artists.edit', $artist->id)}}"><button class="btn btn-info"><i class="fas fa-edit"></i> Edit</button></a></td>
                    <td>{{$artist->id}}</td>
                    <td>{{$artist->name}}</td>
                    <td><img height="50" src="{{$artist->avatar ? asset($artist->avatar->file) : 'http://placehold.it/400x400'}}" alt=""></td>
                    <td>{{$artist->style}}</td>
                    <td>{{$artist->started}}</td>
                    <td>{{$artist->info}}</td>
                    <td>{{$artist->tattoos ? $artist->tattoos->count() : 'No tattoos'}}</td>
                    <td>{{$artist->created_at}}</td>
                    <td>{{$artist->updated_at}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 d-flex justify-content-center">
            {{$artists -> render()}}
        </div>
    </div>
@endsection
