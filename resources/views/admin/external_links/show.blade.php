@extends('layouts.admin')

@section('title', 'Detalle del enlace externo')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_remove_red_eye"></i>
        <span>Detalle del enlace externo</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.external_links.index') }}">Lista de enlace externos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalle del enlace externo</li>
  </ol>
</div>
@endsection


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 mx-auto">
      {{-- <h3>Detalle del enlace externo</h3> --}}
      <div class="mi-card">
        <div class="mi-card-content">
          <img src="{{ $external_link->pathImage() }}" alt="imagen" width="200" class="mb-2">
          <p><strong>Url:</strong> {{ $external_link->ruta }}</p>
          <p><strong>Orden:</strong> {{ $external_link->orden }}</p>
          <p><strong>Publicado:</strong> @include('admin.external_links.partials._publicado') </p>
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