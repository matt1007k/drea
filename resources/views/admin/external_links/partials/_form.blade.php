@csrf

<div class="form-group">
  <label for="imagen">Imagen</label><br>
  @if ($external_link->imagen)
  <img src="{{ $external_link->pathImage() }}" alt="imagen" width="200">
  @endif
  <input type="file" id="imagen" name="imagen" class="form-control @error('imagen') is-invalid @enderror"
    value="{{ old('imagen', $external_link->imagen) }}">
  @error('imagen')
  <div class="text-danger" dusk="error-imagen">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <div class="mi-input @error('url') mi-error @enderror">
    <label for="url" class="mi-input-label">Url del enlace</label>
    <input type="text" id="url" name="ruta" class="form-control" value="{{ old('url', $external_link->ruta) }}" required
      autocomplete="ruta" autofocus>
  </div>
  @error('url')
  <div class="error" dusk="error-url">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <div class="mi-input @error('orden') mi-error @enderror">
    <label for="orden" class="mi-input-label">Orden</label>
    <input type="number" id="orden" name="orden" class="form-control" value="{{ old('orden', $external_link->orden) }}"
      required autocomplete="orden" autofocus>
  </div>
  @error('orden')
  <div class="invalid-feedback" dusk="error-orden">
    {{ $message }}
  </div>
  @enderror
</div>


<h6 class="mb-0">Publicado</h6>
<div class="form-group mt-0">
  <div class="mi-switch">
    <label>
      No
      <input type="checkbox" name="publicado" @if(old('publicado', $external_link->publicado) == 1) checked
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
  <a href="{{ route('admin.external_links.index') }} " class="btn btn-danger text-uppercase">
    Cancelar
    <i class="fa fa-ban ml-1"></i>
  </a>
</div>