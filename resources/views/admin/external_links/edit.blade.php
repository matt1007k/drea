@extends('layouts.admin')

@section('title', 'Editar enlace externo')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_edit"></i>
        <span>Editar enlace externo</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.external_links.index') }}">Lista de enlace externos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar enlace externo</li>
  </ol>
</div>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 mx-auto">
      <div class="mi-card">
        <div class="mi-card-content">
          {{-- <div class="h3 form-header bg-custom-primary text-white text-center">Editar enlace externo</div> --}}
          <form action="{{ route('admin.external_links.update', $external_link) }}" method="POST"
            enctype="multipart/form-data">
            @method('PUT')
            @include('admin.external_links.partials._form', ['btnText' => 'Editar'])
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection