<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Eindproef 2018-2019">
    <meta name="keywords" content="Eindproef website">
    <meta name="author" content="Tara Vandevenne">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

    <link rel="icon" href="{{asset('assets/images/Logo.jpg')}}" type="image/gif" sizes="16x16">

    <title>Eindproef</title>

</head>
<body>

<nav class="navbar bg-nav navbar-expand-lg navbar-light  py-lg-0">
    <a class="navbar-brand ml-lg-5 mr-0 text-white" href="#">InkXperience</a>
    <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link text-white" href="{{route('main')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('frontartists')}}">Artists</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('frontgallery')}}">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('shop')}}">Shop</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('contact')}}">Contact</a>
            </li>
            <li class="nav-item">
                <a href="{{route('cart')}}"><button type="button" class="btn bg-transparent text-white mb-lg-0 mb-2"><i class="fas fa-shopping-cart"></i>
                            @if (Cart::count() > 0)
                            <span class="badge bg-white rounded-circle bluecl">{{Cart::count()}}</span>
                        @endif
                    </button></a>
            </li>

            @if (Route::has('login'))
                @auth
                    @if ($user=Auth::user())

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link text-uppercase text-white px-0 mx-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if($user->role_id == 1 && $user->active == 1)
                                <a class="nav-link text-center" href="{{route('admin')}}"><i class="fas fa-keyboard"></i> Admin</a>
                                @endif
                                <a class="dropdown-item text-center" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                            </div>
                        </li>

                    @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link text-white px-0 mx-2" href="{{route('login') }}"><i class="fas fa-sign-in"></i>Login</a>
                    </li>

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white px-0 mx-2" href="{{route('register') }}"><i class="fas fa-sign-in"></i>Register</a>
                        </li>
                    @endif
                @endauth
            @endif
        </ul>

    </div>
</nav>



            @yield('content')




<footer class="footer  container-fluid ">
    <div class="container bottom_border">
        <div class="row ml-lg-3 ml-2">
            <div class="col-12 col-lg-3 col-md-6 pl-0 pl-md-2">
                <h5 class="text-white pt-2  mb-md-0"><i class="fas fa-angle-double-right text-white pr-2"></i>Vind ons!</h5>

                <p class="mb10 mt-md-3">Dicht gelegen ter centrum dingens. <br> Makkelijk bereikbaar via de dingensstraat.</p>
                <p><i class="fas fa-map-marker-alt text-white"></i> dingesstraat 8, 6666 DINGES </p>
                <p><i class="fa fa-phone text-white"></i>  051 66 66 66 66  </p>
                <p><i class="fa fa fa-envelope text-white"></i> InkXperience@inked.com  </p>
                <p><i class="far fa-clock text-white"></i> Openingsuren: </p>
                <p class="text-white ml-3"> Ma-Vr: 9u00-12u00 (op afspraak) & 13u00-19u00 <br>
                    Za: 9u00-12u00 & 13u-18u00 (op afspraak) <br>
                    Zondagen & feestdagen: gesloten</p>
            </div>


            <div class="col-12 col-lg-3 col-md-6 d-flex flex-column align-items-md-stretch ">
                <h5 class="text-white pt-2 pt-md-2 align-self-md-start mb-md-4"><i class="fas fa-angle-double-right text-white pr-2"></i>Op de kaart</h5>
                <iframe class="kaart pr-3  " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2511.643065774348!2d2.956116915957999!3d50.9857878565268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcb5ee25f39319%3A0x138cdeaf6f88c93e!2sUnnamed+Road%2C+8650+Houthulst!5e0!3m2!1snl!2sbe!4v1544007530983" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <!----------------------FOOTER-LINKS OP GROOT SCHERM-------------------->
            <div class="col-lg-3 col-md-4 text-lg-right d-none d-lg-block">
                <h5 class="text-white pt2"><i class="fas fa-angle-double-right text-white pr-2"></i>Links</h5>
                <ul class="footlist">
                    <li ><a class="text-white" href="{{route('main')}}">Home</a></li>
                    <li><a class="text-white" href="{{route('frontartists')}}">Artists</a></li>
                    <li><a class="text-white" href="{{route('frontgallery')}}">Gallery</a></li>
                    <li><a class="text-white" href="{{route('shop')}}">Shop</a></li>
                    <li><a class="text-white" href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
            <!----------------------FOOTER-LINKS OP KLEIN SCHERM-------------------->
            <div class="col-12 text-center d-flex justify-content-center flex-column d-lg-none">
                <h5 class="text-white pt2"><i class="fas fa-angle-double-right text-white pr-2"></i>Links</h5>
                <ul class="footlist d-inline-block list-inline">
                    <li ><a class="text-white" href="{{route('main')}}">Home</a></li>
                    <li><a class="text-white" href="{{route('frontartists')}}">Artists</a></li>
                    <li><a class="text-white" href="{{route('frontgallery')}}">Gallery</a></li>
                    <li><a class="text-white" href="{{route('shop')}}">Shop</a></li>
                    <li><a class="text-white" href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>


            <div class=" col-12 col-md-3 d-none d-lg-block">
                <img class="w-100 h-75 mt-5 ml-4" src="assets/images/Logo.jpg" alt="">
            </div>


        </div>
        <div class="row mt-5">
            <div class="col-12">

                <p class="text-center"> Copyright &copy;  | Designed by <a href="#">InkXperience</a></p>

                <ul class="icons">
                    <li><a href="http://facebook.com"><i class="fab fa-facebook-f hovlogo1"></i></a></li>
                    <li><a href="http://twitter.com"><i class="fab fa-twitter hovlogo2"></i></a></li>
                    <li><a href="http://linkedin.com"><i class="fab fa-linkedin hovlogo3"></i></a></li>
                    <li><a href="http://instragram.com"><i class="fab fa-instagram hovlogo4"></i></a></li>
                </ul>
            </div>
        </div>
    </div>




</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
{{--<script src="{{asset('js/jquery.min.js')}}"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollup/2.4.1/jquery.scrollUp.min.js"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>--}}
{{--<script src="{{asset('js/bootstrap.min.js')}}"></script>--}}
<script src="{{asset('js/vue.js')}}"></script>
<script src="{{asset('js/proef.js')}}"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.your-class').slick({
            setting-name: setting-value
    });
    });
    $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
</script>
</body>
</html>
