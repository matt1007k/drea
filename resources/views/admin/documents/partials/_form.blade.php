@csrf
<div class="form-group">
  <div class="block @error('tipo_id') mi-error @enderror">
    <label for="tipo_id">Tipo de documento</label>
    <select name="tipo_id" class="form-control" id="tipo_id" required>
      <option value="" disabled selected>Seleccionar tipo</option>

      @foreach ($tipos as $type)
      <option value="{{$type->id}}" dusk="tipo-option" @if($type->id === $document->tipo_id) selected
        @endif>{{ $type->nombre }}</option>
      @endforeach

    </select>
  </div>
  @error('tipo_id')
  <div class="error" dusk="error-tipo">
    {{ $message }}
  </div>
  @enderror
</div>

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
  <div class="mi-input @error('url') mi-error @enderror">
    <label for="url" class="mi-input-label">URL del documento</label>
    <input type="text" id="url" name="url" class="form-control" value="{{ old('url', $document->url) }}" required
      autocomplete="url" autofocus>
  </div>
  @error('url')
  <div class="error" dusk="error-url">
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