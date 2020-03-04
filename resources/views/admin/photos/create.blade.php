@extends('layouts.admin')

@section('title', 'Registrar foto')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_add"></i>
        <span>Registrar álbum</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.photos.index') }}">Lista de fotos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registrar foto</li>
  </ol>
</div>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 mx-auto">
      <div class="mi-card">
        <div class="mi-card-content">
          {{-- <div class="h3 form-header bg-custom-primary text-white text-center">Reistrar fotgo</div> --}}
          <form action="{{ route('admin.photos.store') }}" method="POST" enctype="multipart/form-data">
            @include('admin.photos.partials._form', ['btnText' => 'Guardar'])
          </form>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection