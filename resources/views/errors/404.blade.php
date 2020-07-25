@extends('layouts.auth')
@section('title', 'Página no encontrada')

@section('content')
<div class="h-full m-0 bg-white z-20">

        <div class="flex justify-center flex-col items-center">

            <h1 class="text-black display-1">404</h1>
            <h2 class="text-gray-600">Página no encontrada</h2>
            <h5 class="text-gray-500 mb-3">Está página no existe, verifique que la ruta sea correcta.</h5>

            <a href="{{ url('/admin') }}" class="btn btn-primary">Regresar a inicio</a>

        </div>

</div>


@endsection