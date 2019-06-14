@extends('layouts.front')
@section('content')
    <!----------------------------------------EERSTE SECTIE------------------------------------------>
    <section class="container-fluid px-0">
        <div class="row">

        </div>
    </section>
    <!----------------------------------------SLIDER OP GROOT SCHERM------------------------------------------>
    <section class="container-fluid bg-white pb-5 d-none d-lg-block">
        <div class="your-class autoplay">
            <div>your content</div>
            <div>your content</div>
            <div>your content</div>
        </div>
    </section>

    <!------------------------------PROMOTIE-------------------------->
    <section id="promo" class="position-relative">
        <img class="foto img-fluid" src="assets/images/promo.jpeg" alt="">
        <h3 class="promoText2 position-absolute text-center"> <span class="promoText1 text-uppercase">promo!</span> <br> Nu bij aankoop van een tattoo <br> t.w.v. min.250 euro, <br> een gratis verzorgings crème! </h3>
    </section>


    <!-------------------------------MASONRY OP GROOT SCHERM--------------------------------------->
    <section class="container d-none d-lg-block ">
        <h2 class="bluecl text-center pt-5 mb-5"><i class="fas fa-angle-double-right bluecl pr-2"></i>Shop now!</h2>
        <div class="row">

            @if($tattoos)
                @foreach($tattoos as $tattoo)
            <div class="col-lg-2 my-3">
                <div>
                    <a href="#" > <img src="{{$tattoo->photo ? asset($tattoo->photo->file) : 'http://placehold.it/400x400'}}" class="border img-fluid d-flex" alt=""></a>
                </div>
            </div>
                @endforeach
            @endif

        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center mb-5">
                <a href="{{route('shop')}}"><button class="btn bluebg text-white btn-shadow mx-auto d-block btntext">Go to shop</button></a>
            </div>
        </div>
    </section>






@endsection
