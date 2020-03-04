@csrf

<div class="form-group">
  <div class="mi-input @error('titulo') mi-error @enderror">
    <label for="titulo" class="mi-input-label">Titulo</label>
    <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo', $video->titulo) }}"
      autocomplete="titulo" autofocus>
  </div>
  @error('titulo')
  <div class="error" dusk="error-titulo">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <div class="mi-input @error('video') mi-error @enderror">
    <label for="video" class="mi-input-label">Video</label>
    <input type="text" name="video" id="video" class="form-control @error('video') is-invalid @enderror "
      value="{{ old('video', $video->video) }}" autocomplete="video" autofocus>
  </div>
  @error('video')
  <div class="error" dusk="error-video">
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
<div class="form-group mt-0">
  <div class="mi-switch">
    <label>
      No
      <input type="checkbox" name="publicado" @if(old('publicado', $video->publicado) == 1) checked
      @endif
      >
      <span class="lever"></span> Si
    </label>
  </div>
</div>

<div class="d-flex justify-content-between mt-4">
  <button class="btn btn-success text-uppercase" dusk="btn-registrar">
    {{ $btnText }}
    <i class="fa fa-check ml-1"></i>
  </button>
  <a href="{{ route('admin.videos.index') }} " class="btn btn-danger text-uppercase">
    Cancelar
    <i class="fa fa-ban ml-1"></i>
  </a>
</div>

@push('scripts')
<script src="https://kendo.cdn.telerik.com/2019.2.514/js/cultures/kendo.culture.es-ES.min.js"></script>
<script>
  // Data Picker Initialization
  $('#fecha').kendoDateTimePicker({
      culture: "es-ES",
      // dateInput: true,
      timeFormat: "HH:mm",
      format: "dd-MM-yyyy HH:mm tt",
      value: new Date(
        {{$video->fecha->format('Y')}}, 
        {{$video->fecha->format('m') - 1 }}, 
        {{$video->fecha->format('d')}}, 
        {{$video->fecha->format('H')}}, 
        {{$video->fecha->format('i')}}, 
        {{$video->fecha->format('s')}}
      ),
      min: new Date(2010, 1, 1, 8, 0, 0),
      max: new Date()
  });
</script>
@endpush