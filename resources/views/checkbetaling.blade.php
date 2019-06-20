@extends('layouts.front')
@section('content')

    <div class="container">
        <div class="section my-5">
            <div class="row">
                <div class="col-8">
                    <h2 class="mb-5">Uw betaling is gelukt! Dank u voor uw voorschot!</h2>
                    <p> De rest van het bedrag wordt verwacht op de dag van de afspraak.
                    <br> Mocht u niet opdagen op de afspraak, wordt het voorschot niet terug betaald!</p>
                    <a href="{{route('shop')}}"><button class="btn btn-sm btn-info mt-3 mb-5"><i class="fas fa-angle-double-left"></i> Back to shop</button></a>

                    <p>Nog vragen? Contacteer ons gerust via ons formulier op de website of een telefoontje!</p>
                    <a href="{{route('contact')}}"><button class="btn btn-sm btn-info "><i class="fas fa-angle-double-left"></i> Contacteer ons</button></a>
                </div>
                <div class="col-4">
                    <img src="assets/images/tattooTime.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

@endsection
