@extends('layouts.admin')

@section('title', 'Detalle de menú')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_remove_red_eye"></i>
        <span>Detalle del menú</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.menus.index') }}">Lista de menús</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalle del menú</li>
  </ol>
</div>
@endsection


@section('content')
<div class="container">
  <div class="row flex justify-center">
    <div class="col-md-6">
      <div class="mi-card">
        <div class="mi-card-content">
          <div class="h4 text-center text-info">{{ $menu->titulo }}</div>
          <p><strong>Ruta:</strong> {{ $menu->ruta }}</p>
          <p><strong>Orden:</strong> {{ $menu->orden }}</p>
          <p><strong>Publicado:</strong> @include('admin.menus.partials._publicado') </p>
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