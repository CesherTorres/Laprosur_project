@extends('layouts.header')

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

                            <input type="text" name="" id="" placeholder="MAÑANA - TARDE " class="col-8">
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
        <table id="" class="table table-striped table-bordered display nowrap" cellspacing="0" style="width:100%">
            <thead class="bg-primary text-white">
                <tr>
                    <th>Id</th>
                    <th>Turno</th>
                    <th>H/Comienzo</th>
                    <th>H/Termino</th>
                    <th>Accion</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <form method="POST" action="" class="form-delete">

                            <div class="text-center">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target=""><i
                                        class="fas fa-user-edit"></i></button>
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </div>

                        </form>

                    </td>
                </tr>

            </tbody>

        </table>
    </div>
@endsection
