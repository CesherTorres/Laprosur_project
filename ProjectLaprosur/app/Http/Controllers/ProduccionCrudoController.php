<?php

namespace App\Http\Controllers;
use App\Models\ProduccionCrudo;
use App\Models\TurnoProduccion;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProduccionCrudoController extends Controller
{
    public function index(){
        $turno=TurnoProduccion::all();
        $Pcrudo=ProduccionCrudo::with(['turnos'])->get();

        return view('produccionCrudos.index', compact('Pcrudo','turno'));
    }

    public function store(Request $request)
    {   
        $Pcrudo = new ProduccionCrudo();
        
        $Pcrudo->machineCuts = $request->input('CortesCrudo');
        $Pcrudo->stopTime = Carbon::parse($request->input('TPara'));
        $Pcrudo->horometro = $request->input('HorometroC');
        $Pcrudo->amountOfPeoples = $request->input('CPersonasCrudo');
        $Pcrudo->productionQuantity = $request->input('CProductoCrudo');
        $Pcrudo->date = Carbon::parse($request->input('FechaCrudo'));
        $Pcrudo->id_productionShift = $request->input('TurnoA');
        $Pcrudo->save();

        return redirect('/produccionCrudos');
    }
    // public function edit($id)
    // {
    //     $turno = TurnoProduccion::all();
    //     $Pcrudo = ProduccionCrudo::find($id);
    //     return view('produccionCrudos.EditProduccionC', compact('Pcrudo','turno'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $Pcrudo = ProduccionCrudo::find($id);
    //     $Pcrudo->update([
    //         'machineCuts' => request('CortesCrudo'),
    //         'stopTime' => request('TPara'),
    //         'horometro' => request('HorometroC'),
    //         'amountOfPeoples' => request('CPersonasCrudo'),
    //         'productionQuantity' => request('CProductoCrudo'),
    //         'date' => request('FechaCrudo'),
    //         'id_productionShift' => request('TurnoA'),
    //        ]);
    //     $Pcrudo->save();
    //     return redirect()->route('produccionCrudos.index');
    // }
    public function destroy($id)
    {
        $Pcrudo = ProduccionCrudo::find($id);
        $Pcrudo->delete();
        return redirect()->route('produccionCrudos.index');
    }
}
