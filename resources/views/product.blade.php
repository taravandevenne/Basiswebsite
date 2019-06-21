@extends('layouts.front')
@section('content')


<div class="container">
    <h2 class="bluecl text-center pt-5 py-md-4"><i class="fas fa-angle-double-right bluecl pr-2"></i>Product beschrijving</h2>
    <div class="row my-5">
        <div class="col-md-6 col-12 d-flex">
            <img class="mx-auto" height="400" src="{{asset('assets'.$tattoos->photo->file) }}" alt="">
        </div>
        <div class="col-md-6 col-12 mt-3 mt-md-0">
            <h3>{{$tattoos->name}}</h3>
            <h4 class="mb-4">{{$tattoos->artist->name}}</h4>
            <p>Prijs: € {{$tattoos->price}}</p>
            <p>Te betalen voorschot: € {{$tattoos->advance->amount}}</p>

            <div class="d-flex flex-row">
                <form action="{{route('addcart')}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$tattoos->id}}">
                    <input type="hidden" name="name" value="{{$tattoos->name}}">
                    <input type="hidden" name="artist" value="{{$tattoos->artist->name}}">
                    <input type="hidden" name="total" value="{{$tattoos->price}}">
                    <input type="hidden" name="advance" value="{{$tattoos->advance->amount}}">
                    <input type="hidden" name="photo" value="{{$tattoos->photo->file}}">
                    <button type="submit" class="btn bluebg text-white mb-3"><i class="fas fa-shopping-cart"></i> Add to cart</button>
                </form>


                <button class="btn mx-3 bluebg text-white mb-3"><i class="fas fa-heart "></i></button>
            </div>

            <p>Het voorschot kan via de website betaald worden. Het overige deel van het bedrag van de totale tattoo wordt cash of met bancontact betaald op de dag van de afspraak zelf, in de shop.</p>
            <p>Bij het niet opdagen op de afspraak, wordt het voorschot niet terug betaald. De rest van het bedrag moet op de afspraak cash of met bancontact betaald worden.</p>
        </div>
    </div>
</div>

@endsection
