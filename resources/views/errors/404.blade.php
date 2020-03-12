@extends('layouts.auth')
@section('title', 'Página no encontrada')

@section('content')
<div class="h-100vh w-100 m-0 bg-white">
    <div class="h-100vh w-100 d-flex justify-content-center align-items-center">

        <div class=" d-flex justify-content-center flex-column align-items-center">

            <h1 class="text-primary display-1">404</h1>
            <h2 class="text-secondary m-0">Página no encontrada</h2>
            <h5 class="text-muted mb-3">Está página no existe, verifique que la ruta sea correcta.</h5>

            <a href="{{ url('/admin') }}" class="btn btn-primary text-uppercase">Regresar a inicio</a>

        </div>
    </div>

</div>


@endsection