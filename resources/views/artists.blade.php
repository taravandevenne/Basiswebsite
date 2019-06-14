@extends('layouts.front')
@section('content')

    <section class="container-fluid bg-rand-page">
        <h2 class="bluecl text-center pt-4"><i class="fas fa-angle-double-right bluecl pr-2"></i>Our Artists</h2>
        <div class="row py-3">
            <div class="col-10 offset-1 col-lg-8 offset-lg-2 ">
                <div class="row d-flex align-items-stretch">

                    @if($artists)
                        @foreach($artists as $artist)
                    <div class="col-12 col-lg-3 my-2 my-lg-3 d-flex align-items-stretch ">
                        <div class="card w-100">
                            <div class="cardhead">
                                <div class="">
                                    <img src="{{$artist->avatar ? asset($artist->avatar->file) : 'http://placehold.it/400x400'}}" class="img-fluid mx-auto d-block mt-5 rounded-circle avatar" alt="">
                                </div>
                            </div>
                            <div class="card-body text-center d-flex flex-column">
                                <div class="mb-auto">
                                    <h5 class="card-title bluecl "><u>{{$artist->name}}</u></h5>
                                    <h6 class="card-text font-weight-bold">Stijl:</h6>
                                    <p class="card-text">{{$artist->style}}</p>
                                    <h6 class="card-text font-weight-bold">Bij ons sinds:</h6>
                                    <p class="card-text">{{$artist->started}}</p>
                                    <h6 class="card-text font-weight-bold">Info:</h6>
                                    <p class="card-text">{{$artist->info}}</p>
                                </div>
                                <div>
                                    <a href="#" class="btn bluebg text-white btn-shadow mx-auto d-block align-self-end ">See designs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    @endif


                </div>
            </div>
        </div>
    </section>

@endsection
