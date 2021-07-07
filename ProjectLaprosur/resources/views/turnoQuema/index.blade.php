@include('layouts.header')
@extends('layouts.plantilla')
@section('title', 'Index')
@section('content')

    <div class="container ">
        <div class="row justify-content-center">
            <h1 align="center">TURNOS DE PRODUCCION</h1>
            <hr width=90% align="center" style="background-color: black">
            <br>
            <div class="col-8">
                <form action="">
                    <div class="form-group row">
                        <br>
                        <div class="form-group col-12">
                            <label for="" class="control-label col-3">TURNO :</label>

                            <input type="text" name="" id="" placeholder="DIA - MADRUGADA " class="col-8">
                            <br>              
                            <label for="" class="control-label col-3">HORA DE COMIENZO :</label>

                            <input type="time" name="" id="" class="col-3">
                            <br>
                            <label for="" class="control-label col-3">HORA DE TERMINO :</label>

                            <input type="time" name="" id="" class="col-3">
                            <br>
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
