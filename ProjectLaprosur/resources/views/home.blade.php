@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="content">
                <div class="card-header">HOLA</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    !!GENIAL, HAS INICIADO SESION!!
                </div>
                <br>
                <div class="links, row justify-content-center">
                    <a href="/ladrillos" class="btn btn-primary" id="lista_productos">Productos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
