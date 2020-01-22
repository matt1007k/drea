@extends('layouts.admin')

@section('title', 'Registrar aviso')

@section('breadcrumb')
<nav aria-label="breadcrumb" class="mb-5">
  <ol class="breadcrumb bg-white py-2 px-2">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.documents.index') }}">Lista de documentos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registrar tipo de documento</li>
  </ol>
</nav>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card">
        <div class="card-body">
          <div class="h3 form-header bg-custom-primary text-white text-center">Registrar tipo de documento</div>
          <form action="{{ route('admin.types.store') }}" method="POST">
            @csrf

            <div class="md-form">
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror "
                value="{{ old('nombre') }}" autocomplete="nombre" autofocus>
              @error('nombre')
              <div class="invalid-feedback" dusk="error-nombre">
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