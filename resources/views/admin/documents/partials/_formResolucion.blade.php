@csrf
<input type="hidden" value="tipo_id" value="{{ $tipo->id }}">

<div class="form-group">
  <div class="mi-input @error('titulo') mi-error @enderror">
    <label for="titulo" class="mi-input-label">Titulo</label>
    <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo', $document->titulo) }}"
      required autocomplete="titulo" autofocus>
  </div>
  @error('titulo')
  <div class="error" dusk="error-titulo">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <div class="mi-input @error('anio') mi-error @enderror">
    <label for="anio" class="mi-input-label">Año</label>
    <input type="text" name="anio" id="anio" class="form-control" value="{{ old('anio', $document->anio) }}" required
      autocomplete="anio" autofocus>
  </div>
  @error('anio')
  <div class="error" dusk="error-anio">
    {{ $message }}
  </div>
  @enderror
</div>


<div class="form-group">
  <div class="mi-input @error('descripcion') mi-error @enderror">
    <textarea id="descripcion" name="descripcion" class="md-textarea form-control" required autocomplete="descripcion"
      autofocus>{{ old('descripcion', $document->descripcion) }}</textarea>
    <label for="descripcion" class="mi-input-label">Descripcion</label>
  </div>
  @error('descripcion')
  <div class="error" dusk="error-descripcion">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <label for="archivo">Archivo</label><br>
  @if ($document->archivo)
  <a href="{{ $document->pathFile() }}" target="_blank">
    <img src="{{ asset('/img/icons/content_download.png') }}" alt="{{ $document->titulo }}"
      style="width: 45px; height: 45px;">
  </a>
  @endif
  <input type="file" id="archivo" name="archivo" class="form-control" value="{{ old('archivo', $document->archivo) }}">
  @error('archivo')
  <div class="error" dusk="error-archivo">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="md-form mb-3">
  <p class="mb-0">Fecha y hora de publicación</p>
  <input type="datetime-local" id="fecha" name="fecha" class="form-control @error('fecha') is-invalid @enderror"
    value="{{ old('fecha', $document->fecha) }}">
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
      <input type="checkbox" name="publicado" @if(old('publicado', $document->publicado) == 1) checked
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
  <a href="{{ route('admin.documents.index') }} " class="btn btn-danger text-uppercase">
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
        {{$document->fecha->format('Y')}}, 
        {{$document->fecha->format('m') - 1 }}, 
        {{$document->fecha->format('d')}}, 
        {{$document->fecha->format('H')}}, 
        {{$document->fecha->format('i')}}, 
        {{$document->fecha->format('s')}}
      ),
      min: new Date(2010, 1, 1, 8, 0, 0),
      max: new Date()
  });
</script>
@endpush