<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Avatar;
use App\Http\Requests\ArtistsRequest;
use App\Http\Requests\ArtistsUpdateRequest;
use App\Tattoo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminArtistsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::paginate(15);
        return view('admin.artists.index', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tattoos = Tattoo::pluck('name','id')->all();
        return view('admin.artists.create', compact('tattoos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtistsRequest $request)
    {
        $input = $request->all();
        if($file = $request->file('avatar_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('avatars', $name);
            $avatar = Avatar::create(['file'=>$name]);
            $input['avatar_id'] = $avatar->id;
        }
        Artist::create($input);

        return redirect('/admin/artists');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $artist = Artist::findOrFail($id);
        $tattoos = Tattoo::pluck('name','id')->all();
        return view('admin.artists.edit', compact('artist','tattoos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArtistsUpdateRequest $request, $id)
    {
        $artist = Artist::findOrFail($id);
        $input = $request->all();
        if($file = $request->file('avatar_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('avatars', $name);
            $avatar = Avatar::create(['file'=>$name]);
            $input['avatar_id'] = $avatar->id;
        }
        $artist->update($input);

        return redirect('/admin/artists');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artist = Artist::findOrFail($id);
        unlink(public_path() . $artist->avatar->file);
        $artist->delete();
        Session::flash('deleted_artist', 'The artist is deleted.');
        return redirect ('/admin/artists');
    }
}
