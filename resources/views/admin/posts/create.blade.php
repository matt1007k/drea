@extends('layouts.admin')

@section('title', 'Registrar aviso')

@section('breadcrumb')
<nav aria-label="breadcrumb" class="mb-5">
  <ol class="breadcrumb bg-white py-2 px-2">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.documents.create') }}">Lista de avisos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registrar aviso</li>
  </ol>
</nav>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 mx-auto">
      <div class="card">
        <div class="card-body">
          <div class="h3 form-header bg-custom-primary text-white text-center">Registrar aviso</div>
          <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf

            <div class="md-form">
              <label for="titulo">Titulo</label>
              <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid @enderror "
                value="{{ old('titulo') }}" autocomplete="titulo" autofocus>
              {{-- @error('titulo')
            <div class="invalid-feedback" dusk="error-titulo">
              {{ $message }}
            </div>
            @enderror --}}
        </div>

        <div class="md-form">
          <input placeholder="Seleccionar fecha" type="text" id="fecha" name="fecha" class="form-control datepicker"
            value="{{ old('fecha') }}" autocomplete="fecha" autofocus>
          <label for="fecha">Fecha y hora de publicación</label>
        </div>

        <div class="form-group">
          <label for="contenido">Contenido</label>
          <textarea style="min-height:300px" rows="10" id="contenido" name="contenido"
            class="form-control @error('contenido') is-invalid @enderror" value="{{ old('contenido') }}"
            autocomplete="contenido" autofocus></textarea>
          {{-- @error('contenido')
              <div class="invalid-feedback" dusk="error-contenido">
                {{ $message }}
        </div>
        @enderror --}}
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

@push('scripts')
<script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'contenido' );
  CKEDITOR.editorConfig = function( config ) {
      config.language = 'es';
      config.uiColor = '#F7B42C';
      config.height = 300;
      config.toolbarCanCollapse = true;
    };
    // Data Picker Initialization
    $('.datepicker').pickadate({
      max: new Date(),
      monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dec'],
      weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
      weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Ju', 'Vie', 'Sab'], 
      // Buttons
      today: 'Hoy',
      clear: 'Limpiar',
      close: 'Cerrar',
      // Formats
      formatSubmit: 'dd/mm/yyyy'
    });
</script>
@endpush