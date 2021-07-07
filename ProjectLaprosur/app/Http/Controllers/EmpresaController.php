<?php

namespace App\Http\Controllers;
use App\Models\EmpresaT;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresaT= EmpresaT::all();
        return view('empresas.index',compact('empresaT'));
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
        $empresaT = new EmpresaT();
        $empresaT->businessName = $request->input('ntranporte');
        $empresaT->Ruc = $request->input('ruc');
        $empresaT->save();

        return redirect('/empresas');
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
        $empresaT = EmpresaT::find($id);
        return view('empresas.transporteEdit', compact('empresaT'));
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
        $empresaT = EmpresaT::find($id);
        $empresaT->update([
            'businessName' => request('ntranporte'),
            'Ruc' => request('ruc'),
           ]);
        $empresaT->save();
        return redirect()->route('empresas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresaT = EmpresaT::find($id);
        $empresaT->delete();
        return redirect()->route('empresas.index');
    }
}
