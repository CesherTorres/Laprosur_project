<?php

namespace App\Http\Controllers;
use App\Models\AlmacenCrudo;
use Illuminate\Http\Request;

class AlmacenCrudoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almacenC = AlmacenCrudo::all();
        return view('almacenCrudo.index',compact('almacenC'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $almacenC = new AlmacenCrudo();
        $almacenC->name = $request->input('nombreC');
        $almacenC->location = $request->input('UbicacionC');
        $almacenC->save();

        return redirect('/almacenCrudo');
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
        $almacenC = AlmacenCrudo::find($id);
        return view('almacenCrudo.EditCrudo', compact('almacenC'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $almacenC = AlmacenCrudo::find($id);
        $almacenC->update([
            'name' => request('nombreC'),
            'location' => request('UbicacionC'),
           ]);
        $almacenC->save();
        return redirect()->route('almacenCrudo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $almacenC = AlmacenCrudo::find($id);
        $almacenC->delete();
        return redirect()->route('almacenCrudo.index');
    }
}
