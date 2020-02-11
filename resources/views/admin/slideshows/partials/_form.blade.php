@csrf

<div class="form-group">
  <div class="mi-input @error('titulo') mi-error @enderror">
    <label for="titulo" class="mi-input-label">Titulo</label>
    <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid @enderror "
      value="{{ old('titulo', $slideshow->titulo) }}" autocomplete="titulo" autofocus>
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
      autofocus>{{ old('descripcion', $slideshow->descripcion) }}</textarea>
    @error('descripcion')
    <div class="error" dusk="error-descripcion">
      {{ $message }}
    </div>
    @enderror
  </div>

  <div class="form-group">
    <label for="imagen">Imagen</label><br>
    @if ($slideshow->imagen)
    <img src="{{ $slideshow->pathImage() }}" alt="imagen" width="200">
    @endif
    <input type="file" id="imagen" name="imagen" class="form-control @error('imagen') is-invalid @enderror"
      value="{{ old('imagen', $slideshow->imagen) }}">
    @error('imagen')
    <div class="error" dusk="error-imagen">
      {{ $message }}
    </div>
    @enderror
  </div>


  <div class="form-group">
    <div class="mi-input @error('fecha') mi-error @enderror">
      <div class="font-weigth-bold">Fecha y hora de publicación</div>
      <input placeholder="Seleccionar fecha" type="text" id="fecha" name="fecha" class="form-control"
        value="{{ old('fecha', $slideshow->fecha) }}" autocomplete="fecha" autofocus>
    </div>
    @error('fecha')
    <div id="fecha-error" class="text-danger">
      {{ $message }}
    </div>
    @enderror
  </div>

  <h6 class="mb-0">Publicado</h6>
  <div class="form-group mt-0">
    <div class="mi-switch">
      <label>
        No
        <input type="checkbox" name="publicado" @if(old('publicado', $slideshow->publicado) == 1) checked
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
    <a href="{{ route('admin.slideshows.index') }} " class="btn btn-danger text-uppercase">
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
      timeFormat: "HH:mm",
      format: "dd-MM-yyyy HH:mm tt",
      value: new Date(
        {{$slideshow->fecha->format('Y')}}, 
        {{$slideshow->fecha->format('m') - 1 }}, 
        {{$slideshow->fecha->format('d')}}, 
        {{$slideshow->fecha->format('h')}}, 
        {{$slideshow->fecha->format('i')}}, 
        {{$slideshow->fecha->format('s')}}
      ),
      min: new Date(2010, 1, 1, 8, 0, 0),
      max: new Date()
  });

  </script>
  @endpush