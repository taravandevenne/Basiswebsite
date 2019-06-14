<?php

namespace App\Http\Controllers;

use App\Advance;
use App\Artist;
use App\Http\Requests\TattoosRequest;
use App\Http\Requests\TattoosUpdateRequest;
use App\Photo;
use App\Tattoo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminTattoosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tattoos = Tattoo::paginate(15);
        return view('admin.tattoos.index', compact('tattoos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artists = Artist::pluck('name','id')->all();
        $advances = Advance::pluck('amount','id')->all();
        return view('admin.tattoos.create', compact('artists','advances'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TattoosRequest $request)
    {
        $input = $request->all();
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        Tattoo::create($input);

        return redirect('/admin/tattoos');
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
        $tattoo = Tattoo::findOrFail($id);
        $artists = Artist::pluck('name','id')->all();
        $advances = Advance::pluck('amount','id')->all();
        return view('admin.tattoos.edit', compact('tattoo', 'artists','advances'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TattoosUpdateRequest $request, $id)
    {
        $tattoo = Tattoo::findOrFail($id);
        $input = $request->all();
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        $tattoo->update($input);

        return redirect('/admin/tattoos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tattoo = Tattoo::findOrFail($id);
        unlink(public_path() . $tattoo->photo->file);
        $tattoo->delete();
        Session::flash('deleted_tattoo', 'The tattoo is deleted.');
        return redirect ('/admin/tattoos');
    }
}
