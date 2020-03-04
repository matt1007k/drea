@csrf
<div class="form-group">
  <div class="mi-input @error('titulo') mi-error @enderror">
    <label for="titulo" class="mi-input-label">Titulo</label>
    <input type="text" name="titulo" id="titulo" class="form-control " value="{{ old('titulo', $album->titulo) }}"
      autocomplete="titulo" autofocus>
  </div>
  @error('titulo')
  <div class="error" dusk="error-titulo">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <div class="mi-input @error('descripcion') mi-error @enderror">
    <label for="descripcion" class="mi-input-label">Descripcion</label>
    <textarea rows="3" id="descripcion" name="descripcion" class="form-control" value="" autocomplete="descripcion"
      autofocus>{{ old('descripcion', $album->descripcion) }}</textarea>
  </div>
  @error('descripcion')
  <div class="error" dusk="error-descripcion">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <label for="imagen">Imagen</label><br>
  @if ($album->imagen)
  <img src="{{ $album->pathImage() }}" alt="imagen" width="200">
  @endif
  <input type="file" id="imagen" name="imagen" class="form-control" value="{{ old('imagen', $album->imagen) }}">
  @error('imagen')
  <div class="error" dusk="error-imagen">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="md-form mb-3">
  <p class="mb-0">Fecha y hora de publicación</p>
  <input type="datetime-local" id="fecha" name="fecha" class="form-control @error('fecha') is-invalid @enderror"
    value="{{ old('fecha', $album->fecha) }}">
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
      <input type="checkbox" name="publicado" @if(old('publicado', $album->publicado) == 1) checked
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
  <a href="{{ route('admin.albums.index') }} " class="btn btn-danger text-uppercase">
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
        {{$album->fecha->format('Y')}}, 
        {{$album->fecha->format('m') - 1 }}, 
        {{$album->fecha->format('d')}}, 
        {{$album->fecha->format('H')}}, 
        {{$album->fecha->format('i')}}, 
        {{$album->fecha->format('s')}}
      ),
      min: new Date(2010, 1, 1, 8, 0, 0),
      max: new Date()
  });
</script>
@endpush