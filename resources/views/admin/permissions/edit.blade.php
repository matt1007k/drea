@extends('layouts.admin')

@section('title', 'Editar permiso')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_edit"></i>
        <span>Editar permiso</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.permissions.index') }}">Lista de permisos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar permiso</li>
  </ol>
</div>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="mx-auto col-md-12">
      <div class="mi-card">
        <div class="mi-card-content">
          <form action="{{ route('admin.permissions.update', $permission) }}" method="POST">
            @method('PUT')
            @include('admin.permissions.partials._form', ['btnText' => 'Editar'])
          </form>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection