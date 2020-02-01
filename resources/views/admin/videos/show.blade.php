@extends('layouts.admin')

@section('title', 'Detalle del video')

@section('breadcrumb')
<nav aria-label="breadcrumb" class="mb-5">
  <ol class="px-2 py-2 bg-white breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.videos.index') }}">Lista de videos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalle del video</li>
  </ol>
</nav>
@endsection


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 mx-auto">
      @include('admin.videos.partials._video')
      <a href="{{ route('admin.videos.index')}}" class="btn btn-link">
        <i class="fa fa-arrow-left"></i>
        Regresar
      </a>
    </div>
  </div>
</div>

@endsection