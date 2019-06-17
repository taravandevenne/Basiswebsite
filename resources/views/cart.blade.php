@extends('layouts.front')
@section('content')

    <section class="mb-md-5">
        <div class="container">
            <h2 class="text-info text-center pt-4"><i class="fas fa-angle-double-right text-info pr-2"></i>Your shoppingcart</h2>
            <div class="row mt-4">
                <div class="col-12">
                    @if(session()->has('success_message'))
                        <div class="alert alert-success">
                            {{session()->get('success_message')}}
                        </div>
                    @endif
                    @if(session()->has('error_message'))
                        <div class="alert alert-danger">
                            {{session()->get('error_message')}}
                        </div>
                    @endif

                    @if(Cart::count() > 0)

                    <a href="{{route('shop')}}"><button class="btn btn-sm btn-info my-3"><i class="fas fa-angle-double-left"></i> Back to shop</button></a>
                    <div class="d-flex justify-content-between">

                            <h3>{{Cart::count()}} item(s) in your shopping cart</h3>

                            <button class="btn btn-sm btn-outline-info"><i class="fas fa-trash-alt"></i> Empty cart</button>
                    </div>
                </div>
            </div>






                    @foreach(Cart::content() as $item)
                        <table class="table table-bordered table-active table-responsive-md my-3">
                            <thead>
                            <tr>
                                <th scope="col">Tattoo</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Advance (to pay)</th>
                                <th scope="col">Artist</th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td> <img src="{{$item->options->photo ? asset($item->options->photo) : 'http://placehold.it/400x400'}}" class="" height="100" alt=""></td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->options->total}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->options->artist}}</td>
                                <td><form action="{{route('remove',$item->rowId)}}" method="POST">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                                    </form></td>
                            </tr>

                            </tbody>
                        </table>

                    @endforeach
            
                <div class="row mt-5">
                    <div class="col-6 ">
                    <p>Opgelet! <br> Bij het niet opdagen op de afspraak, wordt het voorschot niet terug betaald. De rest van het bedrag moet op de afspraak cash of met bancontact betaald worden.</p>
                    </div>
                    <div class="col-6">
                        <div class="ml-md-5 d-flex justify-content-end flex-column">
                            <p class="font-weight-bold">Total of the tattoo : <span class="font-weight-normal"> ... </span></p>
                            <p class="font-weight-bold text-info">Total advance to pay : <span class="font-weight-normal">€ {{Cart::subtotal()}}</span></p>
                            <p class="font-weight-bold">Amount still to pay in store : <span class="font-weight-normal"> ... </span></p>
                        </div>

                        <button class="btn btn-sm btn-info ml-md-5">Go to checkout</button>
                    </div>
                </div>

            @else
                <div>
                    <h3>No items in the cart!</h3>

                    <a href="{{route('shop')}}"><button class="btn btn-info mt-3"><i class="fas fa-angle-double-left"></i> Go back shopping </button></a>
                </div>

            @endif


        </div>


    </section>


@endsection
