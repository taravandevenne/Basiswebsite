@extends('layouts.front')
@section('content')

    <section class="container-fluid bg-rand-page">
        <div class="container">
            <h2 class="bluecl text-center pt-4"><i class="fas fa-angle-double-right bluecl pr-2"></i>Our Gallery</h2>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active p-2" id="artist-tab" data-toggle="tab" href="#artist" role="tab" aria-controls="artist" aria-selected="true">Artist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-2" id="fame-tab" data-toggle="tab" href="#fame" role="tab" aria-controls="fame" aria-selected="false">HallOfFame</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="artist" role="tabpanel" aria-labelledby="artist-tab">
                    <div class="row ">
                        <div class="col-lg-3 col-md-3 text-md-left text-lg-left">
                            <ul class="text-white ul-check-artist mt-4">
                                <p>Filter :</p>

                                @if($artists)
                                    @foreach($artists as $artist)
                                <li>
                                    <label class="check"><input type="checkbox">{{$artist->name}}<span class="checkmark"></span></label>
                                </li>
                                    @endforeach
                                @endif

                            </ul>
                        </div>


                        @if($tattoos)
                            @foreach($tattoos as $tattoo)
                        <div class="col-lg-3 col-md-3">
                            <div class="card w-100 my-3">
                                <div class="card-body p-0">
                                    <img src="{{$tattoo->photo ? asset($tattoo->photo->file) : 'http://placehold.it/400x400'}}" class="img-fluid" alt="">
                                </div>
                                <div class="card-footer p-1 d-flex justify-content-center my-auto">
                                    <button class="hovbtn btn bg-transparent bluecl "><i class="fas fa-thumbs-up "></i></button>
                                    <p class="my-auto">{{$tattoo->artist->name}}</p>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @endif

                    </div>
                </div>




                <div class="tab-pane fade" id="fame" role="tabpanel" aria-labelledby="fame-tab">
                    <div class="row">
                        @if($tattoos)
                            @foreach($tattoos as $tattoo)
                                <div class="col-lg-3 col-md-3">
                                    <div class="card w-100 my-3">
                                        <div class="card-body p-0">
                                            <img src="{{$tattoo->photo ? asset($tattoo->photo->file) : 'http://placehold.it/400x400'}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer p-1 d-flex justify-content-center my-auto">
                                            <button class="hovbtn btn bg-transparent bluecl "><i class="fas fa-thumbs-up "></i></button>
                                            <button class="hovbtn btn bg-transparent bluecl "><i class="fas fa-heart "></i></button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                </div>
            </div>
    </section>


@endsection
