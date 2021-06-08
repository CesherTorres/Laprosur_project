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
                            <p> Bienvenido</p>
                        </div>
                    @endif

                    <a href="/ladrillos" class="btn btn-primary" id="lista_productos">Vista</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
