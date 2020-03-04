@csrf

<div class="form-group">
  <label for="album_id">Álbum</label>
  <select name="album_id" id="album_id" class="form-control @error('tipo_id') is-invalid @enderror" id="tipo_id"
    required>
    <option value="" selected disabled>Seleccionar un álbum</option>
    @foreach($albums as $album)
    <option value="{{ $album->id }}" @if($album->id == old('album_id', $photo->album_id)) selected
      @endif>{{ $album->titulo }}</option>
    @endforeach
  </select>
  @error('album_id')
  <div class="invalid-feedback" dusk="error-album-id">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <div class="mi-input @error('titulo') mi-error @enderror">
    <label for="titulo" class="mi-input-label">Titulo</label>
    <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo', $photo->titulo) }}"
      autocomplete="titulo" autofocus>
  </div>
  @error('titulo')
  <div class="error" dusk="error-titulo">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <label for="imagen">Imagen</label><br>
  @if ($photo->imagen)
  <img src="{{ $photo->pathImage() }}" alt="imagen" width="200">
  @endif
  <input type="file" id="imagen" name="imagen" class="form-control @error('imagen') is-invalid @enderror"
    value="{{ old('imagen', $photo->imagen) }}">
  @error('imagen')
  <div class="error" dusk="error-imagen">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="md-form mb-3">
  <p class="mb-0">Fecha y hora de publicación</p>
  <input type="datetime-local" id="fecha" name="fecha" class="form-control @error('fecha') is-invalid @enderror"
    value="{{ old('fecha', $photo->fecha) }}">
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
      <input type="checkbox" name="publicado" @if(old('publicado', $photo->publicado) == 1) checked
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
  <a href="{{ route('admin.photos.index') }} " class="btn btn-danger text-uppercase">
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
        {{$photo->fecha->format('Y')}}, 
        {{$photo->fecha->format('m') - 1 }}, 
        {{$photo->fecha->format('d')}}, 
        {{$photo->fecha->format('H')}}, 
        {{$photo->fecha->format('i')}}, 
        {{$photo->fecha->format('s')}}
      ),
      min: new Date(2010, 1, 1, 8, 0, 0),
      max: new Date()
  });
</script>
@endpush