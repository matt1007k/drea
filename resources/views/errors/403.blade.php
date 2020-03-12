@extends('layouts.auth')
@section('title', 'Sin Autorización')

@section('content')
<div class="h-100vh w-100 m-0 bg-white">
    <div class="h-100vh w-100 d-flex justify-content-center align-items-center">

        <div class=" d-flex justify-content-center flex-column align-items-center">

            <h1 class="text-primary display-1">403</h1>
            <h2 class="text-secondary m-0">Sin Autorización</h2>
            <h5 class="text-muted mb-3">No tienes permiso para hacer está operación.</h3>

                <a href="{{ url('/admin') }}" class="btn btn-primary text-uppercase">Regresar a inicio</a>


        </div>
    </div>

</div>


@endsection