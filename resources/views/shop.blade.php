@extends('layouts.front')
@section('content')

    <div class="container-fluid bg-rand-page">
        <div class="container">
            <h2 class="bluecl text-center pt-4"><i class="fas fa-angle-double-right bluecl pr-2"></i>Shop</h2>
                    <div class="row text-center py-5">
                        @if($tattoos)
                            @foreach($tattoos as $tattoo)
                        <div class="col-lg-3 d-flex align-items-stretch mb-3">
                            <div class="card">
                                <div class="card-header d-flex">
                                    <div class="box">
                                        <div class="imgbox">
                                            <img src="{{$tattoo->photo ? asset($tattoo->photo->file) : 'http://placehold.it/400x400'}}" class="img-fluid align-self-center" alt="">
                                        </div>
                                        <div class="content">
                                            <a href=""><button class="hovbtn btn bg-transparent text-white mb-2"><i class="fas fa-info-circle fa-2x"></i></button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-column justify-content-center my-auto">
                                    <h5>{{$tattoo->name}}</h5>
                                    <h5>{{$tattoo->artist->name}}</h5>
                                    <h5>€ {{$tattoo->price}}</h5>

                                </div>
                                <div class="d-flex flex-row justify-content-center">
                                    <a href="shoppingcart.html"><button class="btn bluebg text-white btn-shadow mb-3"><i class="fas fa-shopping-cart"></i> Add to cart</button></a>
                                    <button class="hovbtn btn bg-transparent bluecl ml-2 mb-2 d-lg-none"><i class="fas fa-heart "></i></button>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @endif


                    </div>
                </div>
        </div>
    </div>

@endsection
