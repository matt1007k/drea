@extends('layouts.admin')

@section('title', 'Detalle de slideshow')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_remove_red_eye"></i>
        <span>Detalle del slideshow</span>
      </div>
    </div>
  </div>
  <ol class="px-2 py-2 bg-white breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.slideshows.index') }}">Lista de slideshows</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalle del slideshow</li>
  </ol>
</div>
@endsection


@section('content')
<div class="container">
  <div class="row flex justify-center">
    <div class="col-md-10">
      @include('admin.slideshows.partials._slideshow')
    </div>
  </div>
  <div class="row">
    <a href="{{ route('admin.slideshows.index')}}" class="btn btn-link">
      <i class="fa fa-arrow-left"></i>
      Regresar
    </a>
  </div>
</div>

@endsection