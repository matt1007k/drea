@extends('layouts.admin')

@section('title', 'Detalle de grupo de convocatoria')

@section('breadcrumb')
<nav aria-label="breadcrumb" class="mb-5">
  <ol class="px-2 py-2 bg-white breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.announcement_groups.index') }}">Lista de grupo de
        convocatorias</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalle del grupo de convocatoria</li>
  </ol>
</nav>
@endsection


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md">
      @include('admin.announcement_groups.partials._announcement_group')
      <a href="{{ route('admin.announcement_groups.index')}}" class="btn btn-link">
        <i class="fa fa-arrow-left"></i>
        Regresar
      </a>
    </div>
  </div>
</div>

@endsection