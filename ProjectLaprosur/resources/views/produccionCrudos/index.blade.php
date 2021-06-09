@extends('layouts.plantilla')
@section('title','Index')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <h1 align="center">REGISTRO DE PRODUCCION CRUDO DIARIO</h1>
        <hr width=90%  align="center" style="background-color: black">
        <br>
        <div class="col-8">
            <form action="">
                <div class="form-group row">
                    <br>
                    <div class="form-group col-12">
                        <label for="" class="control-label col-3">TIPO DE LADRILLOS :</label>
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
                    </div>
                </div>                
                <div class="form-group row">
                    <div class="form-grup col-12">
                        <label for="cantidadLadrillos" class="control-label col-3">CANTIDAD :</label>
                        <input type="input" name="cantidadLadrillos" id="cantidadLadrillos" class="col-8" placeholder="Ingrese la cantidad de ladrillos que se han producido">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="form-group col-12">
                        <label for="horasTrabajo" class="control-label col-3">HORAS DE TRABAJO :</label>
                        <input type="input" name="horasTrabajo" id="horasTrabajo" class="col-8" placeholder="Ingrese la cantidad de Horas trabajadas">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-12">
                        <label for="horometro" class="control-label col-3">HOROMETRO :</label>
                        <input type="input" name="horometro" id="horometro" class="col-8" placeholder="Ingrese el Horómetro de la extrusora">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="align-self-center">
                        <input type="button"  class="btn btn-primary " value="REGISTRAR">
                        <input type="button"  class="btn btn-primary " value="CANCELAR">
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>    
</div>
@endsection
