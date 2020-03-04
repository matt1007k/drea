@extends('layouts.admin')

@section('title', 'Registrar enlace externo')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_add"></i>
        <span>Registrar enlace externo</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.external_links.index') }}">Lista de enlace externos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registrar enlace externo</li>
  </ol>
</div>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 mx-auto">
      <div class="mi-card">
        <div class="mi-card-content">
          {{-- <div class="h3 form-header bg-custom-primary text-white text-center">Registrar enlace externo</div> --}}
          <form action="{{ route('admin.external_links.store') }}" method="POST" enctype="multipart/form-data">
            @include('admin.external_links.partials._form', ['btnText' => 'Guardar'])
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection