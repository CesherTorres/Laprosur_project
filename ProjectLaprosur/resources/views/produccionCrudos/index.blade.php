@extends('layouts.header')
{{-- @extends('layouts.plantilla') --}}
@section('title', 'Index')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <h1 align="center">REGISTRO DE PRODUCCION CRUDO DIARIO</h1>
            <hr width=90% align="center" style="background-color: black">
            <br>
            <div class="col-8">
                <form method="POST" action="/produccionCrudos">
                    @csrf
                    <div class="form-group row">
                        <div class="form-group col-12">
                            <div class="row justify-content-md-center">

                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">CORTES DE MAQUINA:</label>
                                    <input type="text" name="CortesCrudo" id="" placeholder="Número de corte total" class="col-8">
                                </div>

                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">TIEMPO DE PARA:</label>
                                    <input type="time" name="TPara" id="" class="col-3">
                                </div>

                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">HOROMETRO :</label>
                                    <input type="text" name="HorometroC" id="" class="col-8"
                                        placeholder="Ingrese el Horómetro de la extrusora">
                                </div>

                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">CANTIDAD DE PERSONAS :</label>
                                    <input type="text" name="CPersonasCrudo" id="" class="col-8"
                                        placeholder="Ingrese la cantidad de personas que trabajaron">
                                </div>

                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">CANTIDAD DE PRODUCCION TOTAL :</label>
                                    <input type="text" name="CProductoCrudo" id="" class="col-8"
                                        placeholder="Ingrese la cantidad de produccion total del día">
                                </div>

                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">FECHA:</label>
                                    <input type="date" name="FechaCrudo" id="" class="col-3">
                                </div>


                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">TURNO :</label>
                                    <select name="TurnoA" class="custom-select col-6" id="horno">
                                        <option selected>Escoja el turno</option>
                                        @foreach($turno as $turnos)
                                        <option value="{{$turnos['id']}}">{{$turnos['nameShift']}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- Botones --}}
                                <div class="form-group col-12">
                                    <div class="align-self-center" align="center">
                                        <input type="submit" class="btn btn-primary " value="REGISTRAR">
                                        <input type="button" class="btn btn-primary " value="CANCELAR">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <table id="" class="table table-striped table-bordered display nowrap" cellspacing="0" style="width:100%">
            <thead class="bg-primary text-white">
                <tr>
                    <th>Id</th>
                    <th>Corte de Maquina</th>
                    <th>Tiempo de Para</th>
                    <th>Horometro</th>
                    <th>Cantidad de Personas</th>
                    <th>Cantidad de Produccion</th>
                    <th>Fecha</th>
                    <th>Turno</th>

                </tr>
            </thead>

            <tbody>
                @foreach($Pcrudo as $Pcrudos)
                <tr>
                    <td>{{$Pcrudos->id}}</td>
                    <td>{{$Pcrudos->machineCuts}}</td>
                    <td>{{$Pcrudos->stopTime}}</td>
                    <td>{{$Pcrudos->horometro}}</td>
                    <td>{{$Pcrudos->amountOfPeoples}}</td>
                    <td>{{$Pcrudos->productionQuantity}}</td>
                    <td>{{$Pcrudos->date}}</td>
                    @foreach($turno as $turnos)
                    <td>{{$turnos->nameShift}}</td>
                     @endforeach
                </tr>              
                @endforeach
            </tbody>

        </table>
    </div>
    {{-- Aqui termina --}}

@endsection
