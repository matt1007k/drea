@csrf
<div class="md-form">
  <select name="tipo_id"
    class="mdb-select colorful-select dropdown-primary md-dropdown @error('tipo_id') is-invalid @enderror" id="tipo_id"
      required>
      <option value="" disabled selected>Seleccionar tipo</option>

    @foreach ($tipos as $type)
    <option value="{{$type->id}}" dusk="tipo-option" @if($type->id === $document->tipo_id) selected @endif>{{ $type->nombre }}</option>
    @endforeach

  </select>

  @error('tipo_id')
  <div class="invalid-feedback" dusk="error-tipo">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="md-form">
  <label for="titulo">Titulo</label>
  <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid @enderror "
    value="{{ old('titulo', $document->titulo) }}" required autocomplete="titulo" autofocus>
  @error('titulo')
  <div class="invalid-feedback" dusk="error-titulo">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="md-form">
  <label for="url">URL del documento</label>
  <input type="text" id="url" name="url" class="form-control @error('url') is-invalid @enderror"
    value="{{ old('url', $document->url) }}" required autocomplete="url" autofocus>
  @error('url')
  <div class="invalid-feedback" dusk="error-url">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="md-form">
  <textarea id="descripcion" name="descripcion"
    class="md-textarea form-control @error('descripcion') is-invalid @enderror"
    required autocomplete="descripcion" autofocus>{{ old('descripcion', $document->descripcion) }}
  </textarea>
  <label for="descripcion">Descripcion</label>
  @error('descripcion')
  <div class="invalid-feedback" dusk="error-descripcion">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="d-flex justify-content-between mt-4">
  <button class="btn btn-success" dusk="btn-registrar">
    {{ $btnText }}
    <i class="fa fa-check ml-1"></i>
  </button>
  <a href="{{ route('admin.documents.index') }} " class="btn btn-danger">
    Cancelar
    <i class="fa fa-ban ml-1"></i>
  </a>
</div>
