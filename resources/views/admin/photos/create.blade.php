@extends('layouts.admin')

@section('title', 'Registrar foto')

@section('breadcrumb')
<nav aria-label="breadcrumb" class="mb-5">
  <ol class="breadcrumb bg-white py-2 px-2">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.photos.index') }}">Lista de fotos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registrar foto</li>
  </ol>
</nav>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 mx-auto">
      <div class="card">
        <div class="card-body">
          <div class="h3 form-header bg-custom-primary text-white text-center">Reistrar fotgo</div>
          <form action="{{ route('admin.photos.store') }}" method="POST" enctype="multipart/form-data">
            @include('admin.photos.partials._form', ['btnText' => 'Guardar'])
          </form>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection
