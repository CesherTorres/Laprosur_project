<?php

namespace App\Http\Controllers;
use App\Models\TurnoProduccion;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TurnoProduccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turnoP = TurnoProduccion::all();
        return view('turnoProduccion.index', compact('turnoP'));
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
        $turnoP = new TurnoProduccion();
        
        $turnoP->nameShift = $request->input('TurnosPro');
        $turnoP->startTime = Carbon::parse($request->input('Hcomienzo'));
        $turnoP->endTime = Carbon::parse($request->input('Htermino'));
        $turnoP->save();

        return redirect('/turnoProduccion');
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
        $turnoP = TurnoProduccion::find($id);
        return view('turnoProduccion.EditTurnoP', compact('turnoP'));
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
        $turnoP = TurnoProduccion::find($id);
        $turnoP->update([
            'nameShift' => request('TurnoP'),
            'startTime' => request('startimeP'),
            'endTime' => request('EndTimeP'),
           ]);
        $turnoP->save();
        return redirect()->route('turnoProduccion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turnoP = TurnoProduccion::find($id);
        $turnoP->delete();
        return redirect()->route('turnoProduccion.index');
    }
}
