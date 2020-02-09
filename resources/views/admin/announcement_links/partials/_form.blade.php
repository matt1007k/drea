@csrf

<div class="form-group">
  <div class="mi-input @error('titulo') mi-error @enderror">
    <label for="titulo" class="mi-input-label">Titulo</label>
    <input type="text" name="titulo" id="titulo" class="form-control"
      value="{{ old('titulo', $announcement_link->titulo) }}" required autocomplete="titulo" autofocus>
  </div>
  @error('titulo')
  <div class="error" dusk="error-titulo">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <div class="mi-input @error('url') mi-error @enderror">
    <label for="url" class="mi-input-label">URL</label>
    <input type="text" id="url" name="url" class="form-control" value="{{ old('url', $announcement_link->url) }}"
      required autocomplete="url" autofocus>
  </div>
  @error('url')
  <div class="error" dusk="error-url">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <div class="mi-input @error('fecha') mi-error @enderror">
    <div class="font-weigth-bold">Fecha y hora</div>
    <input placeholder="Seleccionar fecha" type="text" id="fecha" name="fecha" class="form-control"
      value="{{ old('fecha', $announcement_link->fecha) }}" autocomplete="fecha" autofocus>
  </div>
  @error('fecha')
  <div id="fecha-error" class="text-danger">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="d-flex justify-content-between mt-4">
  <button class="btn btn-success text-uppercase" dusk="btn-registrar">
    {{ $btnText }}
    <i class="fa fa-check ml-1"></i>
  </button>
  <a href="{{ route('admin.announcements.show', $announcement) }} " class="btn btn-danger text-uppercase">
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
        {{$announcement_link->fecha->format('Y')}}, 
        {{$announcement_link->fecha->format('m') - 1 }}, 
        {{$announcement_link->fecha->format('d')}}, 
        {{$announcement_link->fecha->format('h')}}, 
        {{$announcement_link->fecha->format('i')}}, 
        {{$announcement_link->fecha->format('s')}}
      ),
      min: new Date(2010, 1, 1, 8, 0, 0),
      // max: new Date()
  });
</script>
@endpush