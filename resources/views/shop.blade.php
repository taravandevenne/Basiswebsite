@extends('layouts.front')
@section('content')

    <div class="container-fluid">
        <div class="container">
            <h2 class="text-dark text-center pt-4"><i class="fas fa-angle-double-right text-dark pr-2"></i>Shop</h2>
            <div class="row">
                @if($artists)
                    @foreach($artists as $artist)
                <div class="col-1 mt-5 mx-2 text-white">
                    <a href="{{route('shop', [ "artist" => $artist->id ])}}"><button class="btn rounded bluebg text-white">{{$artist->name}}</button></a>

                </div>
                    @endforeach
                @endif
            </div>
                    <div class="row text-center py-5">
                        @if($tattoos)
                            @foreach($tattoos as $tattoo)
                                @if (!request('artist') || (request('artist') && request('artist') == $tattoo->artist->id))
                        <div class="col-lg-3 d-flex align-items-stretch mb-3">
                            <div class="card bg-rand-page">
                                <div class="card-header d-flex">
                                    <div class="box">
                                        <div class="imgbox">
                                            <img src="{{$tattoo->photo ? asset($tattoo->photo->file) : 'http://placehold.it/400x400'}}" class="img-fluid align-self-center" alt="">
                                        </div>
                                        <div class="content">
                                            <a href="{{route('product', $tattoo->id)}}"><button class="hovbtn btn bg-transparent text-white mb-2"><i class="fas fa-info-circle fa-2x"></i></button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-column justify-content-center my-auto">
                                    <h5>{{$tattoo->name}}</h5>
                                    <h5>{{$tattoo->artist->name}}</h5>
                                    <h5>€ {{$tattoo->price}}</h5>

                                </div>
                                <div class="d-flex flex-row justify-content-center">
                                    
                                    {{--<a href="shoppingcart.html"><button class="btn bluebg text-white btn-shadow mb-3"><i class="fas fa-shopping-cart"></i> Add to cart</button></a>--}}

                                    <form action="{{route('addcart')}}" method="POST">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="{{$tattoo->id}}">
                                        <input type="hidden" name="name" value="{{$tattoo->name}}">
                                        <input type="hidden" name="artist" value="{{$tattoo->artist->name}}">
                                        <input type="hidden" name="total" value="{{$tattoo->price}}">
                                        <input type="hidden" name="advance" value="{{$tattoo->advance->amount}}">
                                        <input type="hidden" name="photo" value="{{$tattoo->photo->file}}">
                                        <button type="submit" class="btn bluebg text-white btn-shadow mb-3">Add to cart</button>
                                    </form>

                                    <button class="hovbtn btn bg-transparent bluecl ml-2 mb-2 d-lg-none"><i class="fas fa-heart "></i></button>
                                </div>
                            </div>
                        </div>
                                @endif
                            @endforeach
                        @endif


                    </div>
                </div>
        </div>
    </div>

@endsection
