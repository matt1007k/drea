@csrf
<div class="form-group">
  <div class="mi-input @error('titulo') mi-error @enderror">
    <label for="titulo" class="mi-input-label">Titulo</label>
    <input type="text" name="titulo" id="titulo" class="form-control " value="{{ old('titulo', $submenu->titulo) }}"
      autocomplete="titulo" autofocus>
  </div>
  @error('titulo')
  <div class="error" dusk="error-titulo">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <div class="mi-input @error('ruta') mi-error @enderror">
    <label for="ruta" class="mi-input-label">Ruta de la página</label>
    <input type="text" id="ruta" name="ruta" class="form-control" value="{{ old('ruta', $submenu->ruta) }}"
      autocomplete="ruta" autofocus>
  </div>
  @error('ruta')
  <div class="error" dusk="error-ruta">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <div class="mi-input @error('orden') mi-error @enderror">
    <label for="orden" class="mi-input-label">Orden</label>
    <input type="number" id="orden" name="orden" class="form-control" value="{{ old('orden', $submenu->orden) }}"
      autocomplete="orden" autofocus>
  </div>
  @error('orden')
  <div class="error" dusk="error-orden">
    {{ $message }}
  </div>
  @enderror
</div>

<h6 class="mb-0">Publicado</h6>
<div class="form-group mt-0">
  <div class="mi-switch">
    <label>
      No
      <input type="checkbox" name="publicado" @if(old('publicado', $submenu->publicado) == 1) checked
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

<div class="d-flex justify-content-between mt-4">
  <button class="btn btn-success text-uppercase" dusk="btn-registrar">
    {{ $btnText }}
    <i class="fa fa-check ml-1"></i>
  </button>
  <a href="{{ route('admin.menus.show', $menu) }} " class="btn btn-danger text-uppercase">
    Cancelar
    <i class="fa fa-ban ml-1"></i>
  </a>
</div>