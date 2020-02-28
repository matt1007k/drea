@csrf
<div class="form-group">
  <div class="block @error('grupo_id') mi-error @enderror">
    <label for="grupo_id">Grupo de convocatoria</label>
    <select name="grupo_id" class="form-control" id="grupo_id" required>
      <option value="" disabled selected>Seleccionar grupo</option>

      @foreach ($grupos as $grupo)
      <option value="{{$grupo->id}}" dusk="grupo-option" @if($grupo->id === $announcement->grupo_id) selected
        @endif>{{ $grupo->nombre }}</option>
      @endforeach

    </select>
  </div>
  @error('grupo_id')
  <div class="error" dusk="error-grupo">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <div class="mi-input @error('titulo') mi-error @enderror">
    <label for="titulo" class="mi-input-label">Titulo</label>
    <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo', $announcement->titulo) }}"
      required autocomplete="titulo" autofocus>
  </div>
  @error('titulo')
  <div class="error" dusk="error-titulo">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <div class="mi-input @error('numero') mi-error @enderror">
    <label for="numero" class="mi-input-label">Número</label>
    <input type="text" id="numero" name="numero" class="form-control" value="{{ old('numero', $announcement->numero) }}"
      required autocomplete="numero" autofocus>
  </div>
  @error('numero')
  <div class="error" dusk="error-numero">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <div class="mi-input @error('fecha') mi-error @enderror">
    <div class="font-weigth-bold">Fecha y hora</div>
    <input placeholder="Seleccionar fecha" type="text" id="fecha" name="fecha" class="form-control"
      value="{{ old('fecha', $announcement->fecha) }}" autocomplete="fecha" autofocus>
  </div>
  @error('fecha')
  <div id="fecha-error" class="text-danger">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <div class="block @error('estado') mi-error @enderror">
    <label for="estado">Estado</label>
    <select name="estado" class="form-control" id="estado" required>
      <option value="en proceso">En proceso</option>
      <option value="cancelado">Cancelado</option>
      <option value="finalizado">Finalizado</option>
      <option value="desierto">Desierto</option>
    </select>
  </div>
  @error('estado')
  <div class="error" dusk="error-estado">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="d-flex justify-content-between mt-4">
  <button class="btn btn-success text-uppercase" dusk="btn-registrar">
    {{ $btnText }}
    <i class="fa fa-check ml-1"></i>
  </button>
  <a href="{{ route('admin.announcements.index') }} " class="btn btn-danger text-uppercase">
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
        {{$announcement->fecha->format('Y')}}, 
        {{$announcement->fecha->format('m') - 1 }}, 
        {{$announcement->fecha->format('d')}}, 
        {{$announcement->fecha->format('H')}}, 
        {{$announcement->fecha->format('i')}}, 
        {{$announcement->fecha->format('s')}}
      ),
      min: new Date(2010, 1, 1, 8, 0, 0),
      max: new Date()
  });
</script>
@endpush