@csrf

<div class="md-form">
  <label for="titulo">Titulo</label>
  <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid @enderror "
    value="{{ old('titulo', $post->titulo) }}" autocomplete="titulo" autofocus>
  @error('titulo')
  <div class="invalid-feedback" dusk="error-titulo">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="md-form">
  <input placeholder="Seleccionar fecha" type="text" id="fecha" name="fecha" class="form-control datepicker"
    value="{{ old('fecha', $post->fecha) }}" autocomplete="fecha" autofocus>
  <label for="fecha">Fecha y hora de publicación</label>
</div>

<div class="form-group">
  <label for="contenido">Contenido</label>
  <textarea style="min-height:300px" rows="10" id="contenido" name="contenido"
    class="form-control @error('contenido') is-invalid @enderror" value="" autocomplete="contenido"
    autofocus>{!! old('contenido', $post->contenido) !!}</textarea>
  @error('contenido')
  <div class="invalid-feedback" dusk="error-contenido">
    {{ $message }}
  </div>
  @enderror
</div>



<div class="d-flex justify-content-between mt-4">
  <button class="btn btn-success" dusk="btn-registrar">
    {{ $btnText }}
    <i class="fa fa-check ml-1"></i>
  </button>
  <a href="{{ route('admin.documents.index') }} " class="btn btn-danger">
    Cancelar
    <i class="fa fa-ban ml-1"></i>
  </a>
</div>

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