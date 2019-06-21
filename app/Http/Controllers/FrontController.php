<?php

namespace App\Http\Controllers;

use App\Advance;
use App\Artist;
use App\Avatar;
use App\Photo;
use App\Tattoo;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function main(){
        $tattoos = Tattoo::all();
        $photos = Photo::all();
        return view('main', compact('tattoos','photos'));
    }

    public function frontartists(){
        $artists = Artist::all();
        $avatars = Avatar::all();
        return view('artists', compact('artists', 'avatars'));
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

    public function checkbetaling(){
        return view('checkbetaling');
    }
}
