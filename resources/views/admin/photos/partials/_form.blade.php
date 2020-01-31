@csrf

<div class="form-group">
    <label for="album_id">Álbum</label>
    <select name="album_id" id="album_id" class="mdb-select colorful-select dropdown-primary md-dropdown @error('tipo_id') is-invalid @enderror" id="tipo_id"
            required>
        <option value="" selected disabled>Seleccionar un álbum</option>
        @foreach($albums as $album)
            <option value="{{ $album->id }}" @if($album->id === old('album_id', $photo->album_id)) selected @endif>{{ $album->titulo }}</option>
        @endforeach
    </select>
    @error('album_id')
    <div class="invalid-feedback" dusk="error-album-id">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="md-form">
  <label for="titulo">Titulo</label>
  <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid @enderror "
    value="{{ old('titulo', $photo->titulo) }}" autocomplete="titulo" autofocus>
  @error('titulo')
  <div class="invalid-feedback" dusk="error-titulo">
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
  <div class="invalid-feedback" dusk="error-imagen">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="md-form">
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
<div class="md-form mt-0">
  <div class="switch">
    <label>
      No
      <input type="checkbox" name="publicado" @if(old('publicado', $photo->publicado) == 1) checked
      @endif
      >
      <span class="lever"></span> Si
    </label>
  </div>
</div>
@error('publicado')
<div class="alert alert-danger" dusk="error-publicado">
  {{ $message }}
</div>
@enderror
<br>



<div class="d-flex justify-content-between mt-4">
  <button class="btn btn-success" dusk="btn-registrar">
    {{ $btnText }}
    <i class="fa fa-check ml-1"></i>
  </button>
  <a href="{{ route('admin.photos.index') }} " class="btn btn-danger">
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
