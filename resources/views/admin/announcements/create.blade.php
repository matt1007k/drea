@extends('layouts.admin')

@section('title', 'Registrar convocatoria')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_add"></i>
        <span>Registrar convocatoria</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.announcements.index') }}">Lista de convocatorias</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registrar convocatoria</li>
  </ol>
</div>
@endsection

@section('content')
<div class="container">
  <div class="row flex justify-center">
    <div class="col-md-8">
      <div class="mi-card">
        <div class="mi-card-content">
          <form action="{{ route('admin.announcements.store') }}" method="POST">
            @include('admin.announcements.partials._form', ['btnText' => 'Guardar'])
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection