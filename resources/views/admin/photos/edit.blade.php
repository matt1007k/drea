@extends('layouts.admin')

@section('title', 'Editar foto')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_edit"></i>
        <span>Editar foto</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.photos.index') }}">Lista de fotos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar foto</li>
  </ol>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="mi-card">
      <div class="mi-card-content">
        {{-- <div class="h3 form-header bg-custom-primary text-white text-center">Editar foto</div> --}}
        <form action="{{ route('admin.photos.update', $photo) }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @include('admin.photos.partials._form', ['btnText' => 'Editar'])
        </form>
      </div>
    </div>
  </div>
</div>

@endsection