@extends('layouts.admin')

@section('title', 'Detalle de foto')

@section('breadcrumb')
<nav aria-label="breadcrumb" class="mb-5">
  <ol class="px-2 py-2 bg-white breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.photos.index') }}">Lista de fotos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalle del foto</li>
  </ol>
</nav>
@endsection


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
      @include('admin.photos.partials._photo')
      <a href="{{ route('admin.photos.index')}}" class="btn btn-link">
        <i class="fa fa-arrow-left"></i>
        Regresar
      </a>
    </div>
  </div>
</div>

@endsection
