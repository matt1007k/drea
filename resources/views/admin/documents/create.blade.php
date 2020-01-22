@extends('layouts.admin')

@section('title', 'Registrar documento')

@section('breadcrumb')
<nav aria-label="breadcrumb" class="mb-5">
  <ol class="breadcrumb bg-white py-2 px-2">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.documents.index') }}">Lista de documentos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registrar documento</li>
  </ol>
</nav>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card">
        <div class="card-body">
          <div class="h3 form-header bg-custom-primary text-white text-center">Registrar documento</div>
          <form action="{{ route('admin.documents.store') }}" method="POST">
            @csrf

            <div class="md-form">
              <label for="titulo">Titulo</label>
              <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid @enderror "
                value="{{ old('titulo') }}" required autocomplete="titulo" autofocus>
              @error('titulo')
              <div class="invalid-feedback" dusk="error-titulo">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="md-form">
              <label for="url">URL del documento</label>
              <input type="text" id="url" name="url" class="form-control @error('url') is-invalid @enderror"
                value="{{ old('url') }}" required autocomplete="url" autofocus>
              @error('url')
              <div class="invalid-feedback" dusk="error-url">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="md-form">
              <textarea id="descripcion" name="descripcion"
                class="md-textarea form-control @error('descripcion') is-invalid @enderror"
                value="{{ old('descripcion') }}" required autocomplete="descripcion" autofocus></textarea>
              <label for="descripcion">Descripcion</label>
              @error('descripcion')
              <div class="invalid-feedback" dusk="error-descripcion">
                {{ $message }}
              </div>
              @enderror
            </div>

            <div class="d-flex justify-content-between mt-4">
              <button class="btn btn-success" dusk="btn-registrar">
                Guardar
                <i class="fa fa-check ml-1"></i>
              </button>
              <a href="{{ route('admin.documents.index') }} " class="btn btn-danger">
                Cancelar
                <i class="fa fa-ban ml-1"></i>
              </a>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection