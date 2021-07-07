<?php

namespace App\Http\Controllers;
use App\Models\TipoLadrillo;
use Illuminate\Http\Request;

class TipoLadrilloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TypeLadrillo= TipoLadrillo::all();
        return view('tipoLadrillos.index',compact('TypeLadrillo'));
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
        $TypeLadrillo = new TipoLadrillo();
        $TypeLadrillo->name = $request->input('TypeLadrillo');
        $TypeLadrillo->save();

        return redirect('/tipoLadrillos')->with('addmarca', 'ok');;
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
        $TypeLadrillo = TipoLadrillo::find($id);
        return view('empresas.EditModal', compact('TypeLadrillo'));
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
        $TypeLadrillo = TipoLadrillo::find($id);
        $TypeLadrillo->update([
            'name' => request('nameLadrillo'),
           ]);
        $TypeLadrillo->save();
        return redirect()->route('tipoLadrillos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $TypeLadrillo = TipoLadrillo::find($id);
        $TypeLadrillo->delete();
        return redirect()->route('tipoLadrillos.index');
    }
}
