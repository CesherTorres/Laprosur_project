@extends('layouts.header')
{{-- @extends('layouts.plantilla') --}}
@section('title', 'Index')
@section('content')

    <div class="container ">
        <div class="row justify-content-center">
            <h1 align="center">REGISTRO DE ALMACEN CRUDO</h1>
            <hr width=90% align="center" style="background-color: black">
            <br>
            <div class="col-8">
                <form method="POST" action="/almacenCrudo">
                @csrf
                    <div class="form-group row">
                        <br>
                        <div class="form-group col-12">
                            <label for="" class="control-label col-3">NOMBRE :</label>
                            <input type="text" name="nombreC" id="" class="col-8"
                                placeholder="EJM: PAMPA -A ">
                        </div>

                        <div class="form-group col-12">
                            <label for="" class="control-label col-3">UBICACION:</label>
                            <input type="text" name="UbicacionC" id="" class="col-3" placeholder="DENTRO - AFUERA">
                        </div>
                        <div class="form-group col-12">
                            <div align="center">
                                <button type="submit" class="btn btn-primary">REGISTRAR</button>
                                <button type="button" class="btn btn-primary">CANCELAR</button>
                            </div>
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
                    <th>Nombre de Almacen</th>
                    <th>Ubicacion</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($almacenC as $almacenCs)
                <tr>
                        <td>{{$almacenCs->id}}</td>
                        <td>{{$almacenCs->name}}</td>
                        <td>{{$almacenCs->location}}</td>
                        <td>
                            <form method="POST" action="{{ route('almacenCrudo.destroy',$almacenCs->id) }}" class="form-delete">
                                            @csrf
                                            @method('DELETE')
                                            <div class="text-center">
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editalmacenC{{$almacenCs->id}}"><i class="fas fa-user-edit"></i></button>
                                                <button type="submit" class="btn btn-danger" onclick="EliminarRegsitro()"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                            
                            </form>
                            @include('almacenCrudo.EditCrudo')
                        </td>    
                </tr>               
                @endforeach
            </tbody>
            
        </table>
    </div>
@endsection
