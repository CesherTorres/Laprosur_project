@extends('layouts.plantilla')
@section('title','Index')
@section('content')
    
@endsection 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@section('content')

    <div class="container col-12">
        <div class="card">
            <div class="card-body">
                <h1 align="center">AVANCE QUEMA</h1>
                <div align="right">
                    <div class="col-md-2">
                        <label>Fecha</label>
                        <div class="input-group">
                            <input type="date" name="fecha" value="{{$now->format('Y-m-d')}}" class="form-control">
                            <div class="input-group-text"><i class="fa fa-calendar "></i></div>                                 
                        </div>
                    </div>
                </div>    
                <div class="col-md-12 col-sm-12">
                
                    <form method="post" name="new_purchase" id="new_purchase" action="/compras">
                         @csrf
                        <hr size="2px" width="100%" noshade="noshade" align="right" />
                            <div class="row">

                                <div class="col-md-6">
                                    <label for="">N° Cachamadas Inicio </label><br>
                                    <select class="custom-select col-6" name="ncachamada" id="ncachamadas">
                                    <option value="">-- Seleccione Cachamadas --</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                    
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="">N° Cachamadas Fin </label><br>
                                    <select class="custom-select col-6" name="ncachamada" id="ncachamadas">
                                    <option value="">-- Seleccione Cachamadas --</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                    
                                    </select>
                                </div>

                            </div>
                            
                            <div class="row">

                                <div class="col-md-4">
                                    <label for="">Horno </label><br>
                                    <select class="custom-select col-6" name="ncachamada" id="ncachamadas">
                                    <option value="">-- Seleccione Horno --</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                    
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label for="">Quema </label><br>
                                    <select class="custom-select col-6" name="ncachamada" id="ncachamadas">
                                    <option value="">-- Seleccione Quema --</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                    
                                    </select>
                                </div>
                                
                                <div class="col-md-4">
                                    <label for="">Tipo de ladrillo </label><br>
                                    <select class="custom-select col-6" name="ncachamada" id="ncachamadas">
                                    <option value="">-- Seleccione Tipo --</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                    
                                    </select>
                                </div>
                                
                            </div>
                            
                            <br>
                            <div class="text-center">
                            <button type="button" class="btn btn-primary">Primary</button>
                            </div>

                            <hr size="2px" width="100%" noshade="noshade" align="right" />
                            <br>

                             <table id="Pindex" class="table table-striped table-bordered shadow-lg mt-4" cellspacing="0" style="width:100%">
                                    <thead class="bg-dark text-white">
                                        <tr>                                        
                                            <th>REGISTRO</th>
                                            <th>FECHA</th>
                                            <th>HORNO</th>
                                            <th>QUEMA</th>
                                            <th>CACHAMADA</th>
                                            <th>ESTADO</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                
                                <tbody>
                                    <tr>                                        
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td> </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <form method="POST" action="">
                                            @csrf
                                            @method('DELETE')
                                            <div class="text-center">
                                                <a class="btn btn-warning" href="" role="button"><i class="fa fa-pencil"></i></a>
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                            </form> 
                                        </td>
                                    </tr>
                                     
                                </tbody>
                               
                    </table>

                            <div class="box-footer" align="center">
                                <button type="submit" class="btn btn-success pull-right "><i class="fa fa-floppy-o"></i> GUARDAR</button>
                            </div>
                        </div>
                                             
                    </form>
                </div>
                
                

                
                   
            </div><!--./card-body-->
        </div><!--./card-->
    </div>