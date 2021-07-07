@include('layouts.header')
@extends('layouts.plantilla')
@section('title', 'Index')
@section('content')

    <div class="container ">
        <div class="row justify-content-center">
            <h1 align="center">REGISTRO DE ALMACEN CRUDO</h1>
            <hr width=90% align="center" style="background-color: black">
            <br>
            <div class="col-8">
                <form action="">
                    <div class="form-group row">
                        <br>
                        <div class="form-group col-12">
                            <label for="" class="control-label col-3">NOMBRE :</label>
                            <input type="text" name="" id="" class="col-8"
                                placeholder="PAMPA">
                        </div>

                        <div class="form-group col-12">
                            <label for="" class="control-label col-3">UBICACION:</label>
                            <input type="text" name="" id="" class="col-3" placeholder="A-B-C-D-E">
                        </div>
                        <div class="form-group col-12">
                            <div align="center">
                                <button type="button" class="btn btn-primary">REGISTRAR</button>
                                <button type="button" class="btn btn-primary">CANCELAR</button>
                            </div>
                        </div>
                    </div>

                    <br>
                </form>
            </div>
        </div>
    </div>
@endsection
