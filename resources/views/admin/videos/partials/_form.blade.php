@csrf

<div class="md-form">
  <label for="titulo">Titulo</label>
  <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid @enderror "
    value="{{ old('titulo', $video->titulo) }}" autocomplete="titulo" autofocus>
  @error('titulo')
  <div class="invalid-feedback" dusk="error-titulo">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="md-form">
  <label for="video">Video</label>
  <input type="text" name="video" id="video" class="form-control @error('video') is-invalid @enderror "
    value="{{ old('video', $video->video) }}" autocomplete="video" autofocus>
  @error('video')
  <div class="invalid-feedback" dusk="error-video">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="md-form">
  <p class="mb-0">Fecha y hora de publicación</p>
  <input type="datetime-local" id="fecha" name="fecha" class="form-control @error('fecha') is-invalid @enderror"
    value="{{ old('fecha', $video->fecha) }}">
  @error('fecha')
  <div class="text-danger text-sm" dusk="error-fecha">
    {{ $message }}
  </div>
  @enderror
</div>

<h6 class="mb-0">Publicado</h6>
<div class="md-form mt-0">
  <div class="switch">
    <label>
      No
      <input type="checkbox" name="publicado" @if(old('publicado', $video->publicado) == 1) checked
      @endif
      >
      <span class="lever"></span> Si
    </label>
  </div>
</div>
<br>



<div class="d-flex justify-content-between mt-4">
  <button class="btn btn-success" dusk="btn-registrar">
    {{ $btnText }}
    <i class="fa fa-check ml-1"></i>
  </button>
  <a href="{{ route('admin.videos.index') }} " class="btn btn-danger">
    Cancelar
    <i class="fa fa-ban ml-1"></i>
  </a>
</div>

@push('scripts')
<script>
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