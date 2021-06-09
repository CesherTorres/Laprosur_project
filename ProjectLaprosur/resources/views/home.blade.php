@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <H4>BIENVENIDO AMIGOS</H4>
                </div>
                <a href="/ladrillos" class="btn btn-primary" id="lista_productos">Ingresar</a>
            </div>
        </div>
    </div>
</div>
@endsection
