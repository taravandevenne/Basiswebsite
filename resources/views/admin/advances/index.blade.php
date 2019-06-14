@extends('layouts.admin')
@section('content')
    @if(Session::has('deleted_advance'))
        <p class="bg-danger text-white">{{session('deleted_advance')}}</p>
    @endif

    <h1>Advances</h1>

    <a href="{{route('advances.create')}}"> <button class="btn btn-success"><i class="fas fa-plus"></i> Create Advance</button></a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th></th>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Range</th>
            <th scope="col">Amount</th>

            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
        </tr>
        </thead>
        <tbody>
        @if($advances)
            @foreach($advances as $advance)
                <tr>
                    <td><a href="{{route('advances.edit', $advance->id)}}"><button class="btn btn-info"><i class="fas fa-edit"></i> Edit</button></a></td>
                    <td>{{$advance->id}}</td>
                    <td>{{$advance->name}}</td>
                    <td>{{$advance->range}}</td>
                    <td>{{$advance->amount}}</td>
                    <td>{{$advance->created_at}}</td>
                    <td>{{$advance->updated_at}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 d-flex justify-content-center">
            {{$advances -> render()}}
        </div>
    </div>
@endsection
