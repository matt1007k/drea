@extends('layouts.admin')

@section('title', 'Detalle de grupo de convocatoria')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_remove_red_eye"></i>
        <span>Detalle del grupo de convocatoria</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.announcement_groups.index') }}">Lista de grupo de
        convocatorias</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalle del grupo de convocatoria</li>
  </ol>
</div>
@endsection


@section('content')
<div class="container">
  <div class="row flex justify-center">
    <div class="col-md-6">
      @include('admin.announcement_groups.partials._announcement_group')
      <a href="{{ route('admin.announcement_groups.index')}}" class="btn btn-link">
        <i class="fa fa-arrow-left"></i>
        Regresar
      </a>
    </div>
  </div>
</div>

@endsection