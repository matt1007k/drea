@extends('layouts.admin')

@section('title', 'Detalle de foto')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_remove_red_eye"></i>
        <span>Detalle del foto</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.photos.index') }}">Lista de fotos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalle del foto</li>
  </ol>
</div>
@endsection


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 mx-auto">
      @include('admin.photos.partials._photo')
      <a href="{{ route('admin.photos.index')}}" class="btn btn-link">
        <i class="fa fa-arrow-left"></i>
        Regresar
      </a>
    </div>
  </div>
</div>

@endsection