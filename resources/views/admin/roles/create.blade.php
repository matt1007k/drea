@extends('layouts.admin')

@section('title', 'Registrar rol')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_add"></i>
        <span>Registrar rol</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">Lista de rols</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registrar rol</li>
  </ol>
</div>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 mx-auto">
      <div class="mi-card">
        <div class="mi-card-content">
          <form action="{{ route('admin.roles.store') }}" method="POST">
            @include('admin.roles.partials._form', ['btnText' => 'Guardar'])
          </form>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection