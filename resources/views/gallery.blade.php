@extends('layouts.front')
@section('content')

    <section class="container-fluid mb-5">
        <div class="container">
            <h2 class="text-dark text-center pt-4"><i class="fas fa-angle-double-right text-dark pr-2"></i>Our Gallery</h2>
            <ul class="nav nav-tabs " id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active p-2 text-white" id="artist-tab" data-toggle="tab" href="#artist" role="tab" aria-controls="artist" aria-selected="true">Tattoos</a>
                </li>

            </ul>
            <div class="tab-content bg-rand-page px-4" id="myTabContent">
                <div class="tab-pane fade show active" id="artist" role="tabpanel" aria-labelledby="artist-tab">
                    <div class="row ">
                                <p>Filter :</p>

                                @if($artists)
                                    @foreach($artists as $artist)
                                        <div class="col-lg-1 col-md-2  my-1 mx-2 text-white">
                                    <a href="{{route('frontgallery', [ "artist" => $artist->id ])}}"><button class="btn rounded bluebg text-white my-1">{{$artist->name}}</button></a>
                                        </div>
                                    @endforeach
                                @endif
                                <div class="col-lg-1 col-md-2  my-1 mx-2 text-white">
                                    <a href="{{route('frontgallery')}}"><button class="btn rounded bg-white text-info border-info my-1">Show all</button></a>
                                </div>
                        </div>


                    <div class="row">
                        @if(!request('artist') || count($tattoos->where('artist_id', request('artist'))) != 0)
                            @foreach($tattoos as $tattoo)
                                @if (!request('artist') || (request('artist') && request('artist') == $tattoo->artist->id))
                                <div class="col-lg-3 col-md-3">
                                    <div class="card w-100 my-3">
                                        <div class="card-body p-0">
                                            <img src="{{asset('assets'.$tattoo->photo->file) }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-footer p-1 d-flex justify-content-center my-auto">
                                            {{--<button class="hovbtn btn bg-transparent bluecl "><i class="fas fa-thumbs-up "></i></button>--}}
                                            <button class="hovbtn btn bg-transparent bluecl "><i class="fas fa-heart "></i></button>
                                            <p class="my-auto">{{$tattoo->artist->name}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            @else <h3 class="my-5 text-center mx-auto">Er zijn momenteel geen tattoos voor deze artist. <br>
                                                    Kom later nog eens terug! <br>  <i class="fas fa-2x fa-times-circle my-3"></i></h3>

                        @endif
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
