@extends('layouts.admin')

@section('title', 'Registrar slideshow')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_add"></i>
        <span>Registrar slideshow</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.slideshows.index') }}">Lista de slideshows</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registrar slideshow</li>
  </ol>
</div>
@endsection

@section('content')
<div class="container">
  <div class="row flex justify-center">
    <div class="col-md-10">
      <div class="mi-card">
        <div class="mi-card-content">
          <form action="{{ route('admin.slideshows.store') }}" method="POST" enctype="multipart/form-data">
            @include('admin.slideshows.partials._form', ['btnText' => 'Guardar'])
          </form>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection