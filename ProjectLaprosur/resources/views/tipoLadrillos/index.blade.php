@extends('layouts.header')
@section('title', 'Index')
@section('content')

    <div class="container ">
        <div class="row justify-content-center">
            <h1 align="center">REGISTRO DE TIPO DE LADRILLOS</h1>
            <hr width=90% align="center" style="background-color: black">
            <br>
            <div class="col-8">
                <form method="POST" action="/tipoLadrillos">
                @csrf
                    <div class="form-group row">
                        <br>
                        <div class="form-group col-12">
                            <label for="" class="control-label col-3">TIPO DE LADRILLOS :</label>

                            <input type="text" name="TypeLadrillo" id="" placeholder="Tipo de Ladrillo" class="col-8">
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
                            <br>
                            <br>
                            <div align="center">
                                <button type="submit" onclick="swall()" class="btn btn-primary">REGISTRAR</button>
                            </div>
                        </div>

                        <br>
                    </div>
                </form>
            </div>

                <table id="tcategory" class="table table-striped table-bordered display nowrap" cellspacing="0" style="width:100%">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Id</th>
                                <th>Tipo de Ladrillo</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach($TypeLadrillo as $TypeLadrillos)
                            <tr>
                                    <td>{{$TypeLadrillos->id}}</td>
                                    <td>{{$TypeLadrillos->name}}</td>
                                    <td>
                                        <form method="POST" action="{{ route('tipoLadrillos.destroy',$TypeLadrillos->id) }}" class="form-delete">
                                            @csrf
                                            @method('DELETE')
                                            <div class="text-center">
                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editLadrillosT{{$TypeLadrillos->id}}"><i class="fas fa-user-edit"></i></button>
                                                <button type="submit" class="btn btn-danger" onclick="EliminarRegsitro()"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                            
                                        </form>
                                        @include('tipoladrillos.EditModal')
                                    </td>    
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>
                
        </div>
    </div>

@endsection
