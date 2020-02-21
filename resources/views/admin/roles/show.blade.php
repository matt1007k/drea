@extends('layouts.admin')

@section('title', 'Detalle de rol')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_remove_red_eye"></i>
        <span>Detalle del rol</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">Lista de roles</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalle del rol</li>
  </ol>
</div>
@endsection


@section('content')
<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="bg-white p-6 mx-4 shadow-lg">
        @include('admin.roles.partials._role')
      </div>
      <a href="{{ route('admin.roles.index')}}" class="btn btn-link">
        <i class="fa fa-arrow-left"></i>
        Regresar
      </a>
    </div>
  </div>
</div>

@endsection