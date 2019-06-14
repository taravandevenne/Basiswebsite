<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Tattoo;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function main(){
        $tattoos = Tattoo::all();
        return view('main', compact('tattoos'));
    }

    public function frontartists(){
        $artists = Artist::all();
        return view('artists', compact('artists'));
    }

    public function frontgallery(){
        $tattoos = Tattoo::all();
        $artists = Artist::all();
        return view('gallery', compact('tattoos', 'artists'));
    }

    public function shop(){
        $tattoos = Tattoo::all();
        $artists = Artist::all();
        return view('shop', compact('tattoos', 'artists'));
    }

    public function contact(){
        $artists = Artist::all();
        return view('contact', compact('artists'));
    }

    public function info(){
        $tattoos = Tattoo::all();
        $artists = Artist::all();
        return view('info', compact('tattoos', 'artists'));
    }

    public function cart(){
        return view('cart');
    }
}
