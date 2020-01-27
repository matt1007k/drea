@extends('layouts.admin')

@section('title', 'Detalle de menú')

@section('breadcrumb')
<nav aria-label="breadcrumb" class="mb-5">
  <ol class="px-2 py-2 bg-white breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.documents.index') }}">Lista de menús</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalle del menú</li>
  </ol>
</nav>
@endsection


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <h3>Detalle de menú</h3>
      <div class="card">
        <div class="card-body">
          <h4 class="text-custom-primary text-center">{{ $menu->titulo }}</h4>
          <p>Ruta: {{ $menu->ruta }}</p>
          <p>Orden: {{ $menu->orden }}</p>
          <p>Publicado: @include('admin.menus.partials._publicado') </p>
        </div>
      </div>
      <a href="{{ route('admin.menus.index')}}" class="btn btn-link">
        <i class="fa fa-arrow-left"></i>
        Regresar
      </a>
    </div>
  </div>
</div>

@endsection