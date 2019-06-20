<?php

namespace App\Http\Controllers;

use App\Advance;
use App\Artist;
use App\Photo;
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
        $advances = Advance::all();
        $photos = Photo::all();
        return view('shop', compact('tattoos', 'artists', 'advances','photos'));
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

    public function product($id){
        $tattoos = Tattoo::findOrFail($id);
        $artists = Artist::all();
        $advances = Advance::all();
        return view('product', compact('tattoos', 'artists','advances'));
    }

}
