@extends('layouts.header')
{{-- @extends('layouts.plantilla') --}}
@section('title', 'Index')
@section('content')

    <div class="container ">
        <div class="row justify-content-center">
            <h1 align="center">REGISTRO DE EMPRESAS TRANSPORTISTAS</h1>
            <hr width=90% align="center" style="background-color: black">
            <br>
            <div class="col-8">
                <form method="POST" action="/empresas">
                    @csrf
                    <div class="form-group row">
                        <br>
                        <div class="form-group col-12">
                            <label for="" class="control-label col-3">NOMBRE DE LA EMPRESA:</label>
                            <input type="text" name="ntranporte" id="" class="col-8"
                                placeholder="Nombre de Empresa">
                        </div>

                        <div class="form-group col-12">
                            <label for="" class="control-label col-3">RUC:</label>
                            <input type="text" name="ruc" id="" class="col-8" placeholder="ejm: 205487695321">
                        </div>

                                <div align="center">
                                    <button type="submit" class="btn btn-primary">REGISTRAR</button>
                                    <button type="submit" class="btn btn-danger">ELIMINAR</button>
                                </div>

                    </div>

                    <br>
                </form>
            </div>
        </div>
    </div>
    <br>
 
        <div class="content-header">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">REGISTRO DE TRANSPORTE</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
        </div><!-- /.content-header -->

        <div class="card card-primary card-outline">
        <div class="card-header">
        <h3 class="card-title">Lista de marcas</h3>
        </div>
            <div class="card-body">

                <br><br>
                    <table id="tcategory" class="table table-striped table-bordered display nowrap" cellspacing="0" style="width:100%">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Id</th>
                                <th>Nombre de Empresa</th>
                                <th>Ruc</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($empresaT as $empresaTs)
                            <tr>
                                    <td>{{$empresaTs->id}}</td>
                                    <td>{{$empresaTs->businessName}}</td>
                                    <td>{{$empresaTs->Ruc}}</td>
                                    <td>
                                        <form method="POST" action="{{ route('empresas.destroy',$empresaTs->id) }}" class="form-delete">
                                            @csrf
                                            @method('DELETE')
                                            <div class="text-center">
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editTransporte{{$empresaTs->id}}"><i class="fas fa-user-edit"></i></button>
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                            
                                        </form>
                                        @include('empresas.TransporteEdit')
                                    </td>   
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
            </div>
        </div>
@endsection
