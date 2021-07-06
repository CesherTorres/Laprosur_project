@include('layouts.header')
@extends('layouts.plantilla')
@section('title','Index')
@section('content')
    
@endsection 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@section('content')

    <div class="container col-8">
        <div class="card">
            <div class="card-body">
                <h1 align="center">CONTROL LADRILLO COCIDO</h1>
                <div align="right">
                    <div class="col-md-3">
                        <label>Fecha</label>
                        <div class="input-group">
                            <input type="date" name="fecha" value="{{$now->format('Y-m-d')}}" class="form-control">
                            <div class="input-group-text"><i class="fa fa-calendar "></i></div>                                 
                        </div>
                    </div>
                </div>    
                <div class="col-md-12 col-sm-12">
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                    <form method="post" name="new_purchase" id="new_purchase" action="/compras">
                         @csrf
                         <label>Despacho Ladrillos</label>
                        <hr size="2px" width="100%" noshade="noshade" align="right" />
                            <div class="col-auto p-5 text-center">

                                <div class="col-md-12">
                                    <label for="">Tipo de Ladrillo </label>
                                    <select class="custom-select col-4" name="ncachamada" id="ncachamadas">
                                    <option value="">-- Seleccione Horno --</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                    
                                    </select>
                                </div>
                                <br>
                                <div align="center">
                                    <div class="col-md-6">
                                            <div class="input-group col-12">
                                                <label>Cantidad</label>
                                                <div class="input-group-text">S/</div>
                                                <input type="text" class="form-control"  id="pcompra"  value="">
                                            </div>
                                    </div>
                                </div>
                                <br> 
                                <div class="col-md-12">
                                    <label for="">Quema </label>
                                    <select class="custom-select col-4" name="ncachamada" id="ncachamadas">
                                    <option value="">-- Seleccione Quema --</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                    
                                    </select>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <label for="">Pampa </label>
                                    <select class="custom-select col-4" name="ncachamada" id="ncachamadas">
                                    <option value="">-- Seleccione Pampa --</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                    
                                    </select>
                                </div>
                                <br>
                                <div class="col-md-12">
                                    <label for="">Placa </label>
                                    <select class="custom-select col-4" name="ncachamada" id="ncachamadas">
                                    <option value="">-- Seleccione Placa --</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                    
                                    </select>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>                   