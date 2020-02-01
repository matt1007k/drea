@extends('layouts.admin')

@section('title', 'Detalle del enlace externo')

@section('breadcrumb')
<nav aria-label="breadcrumb" class="mb-5">
  <ol class="px-2 py-2 bg-white breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.external_links.index') }}">Lista de enlace externos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalle del enlace externo</li>
  </ol>
</nav>
@endsection


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <h3>Detalle del enlace externo</h3>
      <div class="card">
        <div class="card-body">
          <img src="{{ $external_link->pathImage() }}" alt="imagen" width="200">
          <p>Url: {{ $external_link->ruta }}</p>
          <p>Orden: {{ $external_link->orden }}</p>
          <p>Publicado: @include('admin.external_links.partials._publicado') </p>
        </div>
      </div>
      <a href="{{ route('admin.external_links.index')}}" class="btn btn-link">
        <i class="fa fa-arrow-left"></i>
        Regresar
      </a>
    </div>
  </div>
</div>

@endsection