@extends('layouts.front')
@section('content')

    <section class="pb-md-5">
        <div class="container">
            <h2 class="text-dark text-center pt-4"><i class="fas fa-angle-double-right text-dark pr-2"></i>Your shoppingcart</h2>
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
                        <table class="table table-bordered bg-rand-page table-responsive-md my-3">
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







                        <form id="checkout-form" action="aankopen" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="stripeToken" id="stripeToken">
                            <input type="hidden" name="stripeEmail" id="stripeEmail">
                            <button type="submit" class="btn btn-sm btn-info ml-md-5">Go to checkout</button>

                            <script src="https://checkout.stripe.com/checkout.js"></script>
                            <script>
                                    {{--src="https://checkout.stripe.com/checkout.js" class="stripe-button"--}}
                                    {{--data-key="{{config('services.stripe.key')}}"--}}
                                    {{--data-amount="1000"--}}
                                    {{--data-name="Mijn winkelmandje"--}}
                                    {{--data-description="Beschrijving winkelmandje"--}}
                                    {{--data-image="https://stripe.com/img/documentation/checkout/marketplace.png"--}}
                                    {{--data-locale="auto"--}}
                                    {{--data-currency="eur">--}}

                                let stripe = StripeCheckout.configure({
                                        key:"{{config('services.stripe.key')}}",
                                        image:"https://stripe.com/img/documentation/checkout/marketplace.png",
                                        locale:"auto",
                                        token: function(token){
                                            document.querySelector('#stripeEmail').value=token.email;
                                            document.querySelector('#stripeToken').value=token.id;
                                            document.querySelector('#checkout-form').submit();

                                        }
                                    });

                                document.querySelector('button').addEventListener('click', function(e){
                                    stripe.open({
                                        name:'mijn product',
                                        description:'details over product',
                                        zipCode:false,
                                        amount: 1000,
                                        currency:'eur',
                                    });
                                    e.preventDefault();
                                });
                            </script>
                        </form>





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
