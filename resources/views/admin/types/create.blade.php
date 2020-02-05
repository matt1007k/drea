@extends('layouts.admin')

@section('title', 'Registrar aviso')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_add"></i>
        <span>Registrar tipo de documento</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.documents.index') }}">Lista de documentos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registrar tipo de documento</li>
  </ol>
</div>
@endsection

@section('content')
<div class="container">
  <div class="row flex justify-center">
    <div class="col-md-6">
      <div class="mi-card">
        <div class="mi-card-content">
          <form action="{{ route('admin.types.store') }}" method="POST">
            @csrf

            <div class="form-group">
              <div class="mi-input  @error('nombre') mi-error @enderror ">
                <label for="nombre" class="mi-input-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}"
                  autocomplete="nombre" autofocus required>
              </div>
              @error('nombre')
              <div class="error" dusk="error-nombre">
                {{ $message }}
              </div>
              @enderror
            </div>


            <div class="d-flex justify-content-between mt-4">
              <button class="btn btn-success text-uppercase" dusk="btn-registrar">
                Guardar
                <i class="fa fa-check ml-1"></i>
              </button>
              <a href="{{ route('admin.documents.index') }} " class="btn btn-danger text-uppercase">
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