@csrf
<div class="form-group">
  <div class="mi-input @error('titulo') mi-error @enderror">
    <label for="titulo" class="mi-input-label">Titulo</label>
    <input type="text" name="titulo" id="titulo" class="form-control " value="{{ old('titulo', $ad->titulo) }}"
      autocomplete="titulo" autofocus>
  </div>
  @error('titulo')
  <div class="error" dusk="error-titulo">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <div class="mi-input @error('url') mi-error @enderror">
    <label for="url" class="mi-input-label">Url</label>
    <input type="text" name="url" id="url" class="form-control " value="{{ old('url', $ad->url) }}" autocomplete="url"
      autofocus>
  </div>
  @error('url')
  <div class="error" dusk="error-url">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <label for="imagen">Imagen</label><br>
  @if ($ad->imagen)
  <img src="{{ $ad->pathImage() }}" alt="imagen" width="200">
  @endif
  <input type="file" id="imagen" name="imagen" class="form-control" value="{{ old('imagen', $ad->imagen) }}">
  @error('imagen')
  <div class="error" dusk="error-imagen">
    {{ $message }}
  </div>
  @enderror
</div>

<h6 class="mb-0">Publicado</h6>
<div class="form-group mt-0">
  <div class="mi-switch">
    <label>
      No
      <input type="checkbox" name="publicado" @if(old('publicado', $ad->publicado) == 1) checked
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
  <a href="{{ route('admin.ads.index') }} " class="btn btn-danger text-uppercase">
    Cancelar
    <i class="fa fa-ban ml-1"></i>
  </a>
</div>