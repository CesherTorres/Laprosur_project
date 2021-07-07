@include('layouts.header')
@extends('layouts.plantilla')
@section('title', 'Index')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <h1 align="center">REGISTRO DE INGRESO DE LADRILLOS AL HORNO</h1>
            <hr width=90% align="center" style="background-color: black">
            <br>
            <div class="col-8">
                <form action="">
                    <div class="form-group row">
                        <div class="form-group col-12">
                            <div class="row justify-content-md-center">

                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">PLACA DEL VEHICULO:</label>
                                    <input type="text" name="" id="" placeholder="Placa" class="col-8">
                                </div>

                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">EMPRESA TRANSPORTISTA:</label>
                                    <select class="custom-select col-6" id="horno">

                                        <option selected>Escoja la Empresa</option>
                                        <option value="">CHINO E.I.R.L</option>
                                        <option value="">ALEXANDER E.I.R.L</option>
                                        <option value="">JOSETH E.I.R.L</option>
                                    </select>
                                </div>
                                <hr size="2px" width="100%" noshade="noshade" align="right" />
                                
                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">HOROMETRO :</label>
                                    <input type="text" name="" id="" class="col-8"
                                        placeholder="Ingrese el Horómetro de la extrusora">
                                </div>

                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">CANTIDAD DE PERSONAS :</label>
                                    <input type="text" name="" id="" class="col-8"
                                        placeholder="Ingrese la cantidad de personas que trabajaron">
                                </div>

                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">CANTIDAD DE PRODUCCION TOTAL :</label>
                                    <input type="text" name="" id="" class="col-8"
                                        placeholder="Ingrese la cantidad de produccion total del día">
                                </div>

                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">FECHA:</label>
                                    <input type="date" name="" id="" class="col-3">
                                </div>


                                <div class="form-group col-12">
                                    <label for="" class="control-label col-3">TURNO :</label>
                                    <select class="custom-select col-6" id="horno">
                                        <option selected>Escoja el turno</option>
                                        <option value="">mañana</option>
                                        <option value="">tarde</option>
                                    </select>
                                </div>

                                {{-- Botones --}}
                                <div class="form-group col-12">
                                    <div class="align-self-center" align="center">
                                        <input type="button" class="btn btn-primary " value="REGISTRAR">
                                        <input type="button" class="btn btn-primary " value="CANCELAR">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                {{-- Aqui termina --}}

            @endsection
