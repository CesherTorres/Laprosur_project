@include('layouts.header')
@extends('layouts.plantilla')
@section('title', 'Index')
@section('content')

    <div class="container ">
        <div class="row justify-content-center">
            <h1 align="center">REGISTRO DE TIPO DE LADRILLOS</h1>
            <hr width=90% align="center" style="background-color: black">
            <br>
            <div class="col-8">
                <form action="">
                    <div class="form-group row">
                        <br>
                        <div class="form-group col-12">
                            <label for="" class="control-label col-3">TIPO DE LADRILLOS :</label>

                            <input type="text" name="" id="" placeholder="Tipo de Ladrillo" class="col-8">
                            <br>
                            "Esto solo es una sugerencia de que tipo de ladrilleros deben de ir"
                            <select class="custom-select col-8" id="tipoLadrillo" name="tipoLadrillo">
                                <option selected>Escoja una opción</option>
                                <option value="KK 18 ECONOMICO">KK 18 ECONOMICO</option>
                                <option value="KK 18 SIMPLE">KK 18 SIMPLE</option>
                                <option value="KK 18 MANO">KK 18 MANO</option>
                                <option value="KK 18 INFES">KK 18 INFES</option>
                                <option value="TECHO 20 X 30 X 30">TECHO 20 X 30 X 30</option>
                                <option value="TECHO 15 X 30 X 30">TECHO 15 X 30 X 30</option>
                                <option value="TECHO 12 X 30 X 30">TECHO 12 X 30 X 30</option>
                                <option value="TECHO 08 X 30 X 30">TECHO 08 X 30 X 30</option>
                                <option value="PANDERETA ACANALADA">PANDERETA ACANALADA</option>
                            </select>
                            <div align="center">
                                <button type="button" class="btn btn-primary">REGISTRAR</button>
                                <button type="button" class="btn btn-primary">CANCELAR</button>
                            </div>
                        </div>

                        <br>
                </form>
            </div>
        </div>
    </div>
@endsection
