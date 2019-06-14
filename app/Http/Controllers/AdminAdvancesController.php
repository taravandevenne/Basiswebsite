<?php

namespace App\Http\Controllers;

use App\Advance;
use App\Http\Requests\AdvancesRequest;
use App\Http\Requests\AdvancesUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAdvancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advances = Advance::paginate(15);
        return view('admin.advances.index', compact('advances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdvancesRequest $request)
    {
        Advance::create([
            'name' => $request['name'],
            'range' => $request['range'],
            'amount' => $request['amount'],

        ]);
        return redirect('/admin/advances');
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
        $advance = Advance::findOrFail($id);
        return view('admin.advances.edit', compact('advance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdvancesUpdateRequest $request, $id)
    {
        $advance = Advance::findOrFail($id);
        $advance -> update($request->all());
        return redirect('admin/advances');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Advance::findOrFail($id)->delete();
        Session::flash('deleted_advance', 'The Advance is deleted.');
        return redirect ('/admin/advances');
    }
}
