@csrf
<div class="md-form">
  <label for="titulo">Titulo</label>
  <input type="text" name="titulo" id="titulo" class="form-control @error('titulo') is-invalid @enderror "
    value="{{ old('titulo', $menu->titulo) }}" required autocomplete="titulo" autofocus>
  @error('titulo')
  <div class="invalid-feedback" dusk="error-titulo">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="md-form">
  <label for="ruta">Ruta de la página</label>
  <input type="text" id="ruta" name="ruta" class="form-control @error('ruta') is-invalid @enderror"
    value="{{ old('ruta', $menu->ruta) }}" required autocomplete="ruta" autofocus>
  @error('ruta')
  <div class="invalid-feedback" dusk="error-ruta">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="md-form">
  <label for="orden">Orden</label>
  <input type="number" id="orden" name="orden" class="form-control @error('orden') is-invalid @enderror"
    value="{{ old('orden', $menu->orden) }}" required autocomplete="orden" autofocus>
  @error('orden')
  <div class="invalid-feedback" dusk="error-orden">
    {{ $message }}
  </div>
  @enderror
</div>
{{ $menu->publicado }}
<h6 class="mb-0">Publicado</h6>
<div class="md-form mt-0">
  <div class="switch">
    <label>
      No
      <input type="checkbox" name="publicado" @if(old('publicado', $menu->publicado) == 1) checked
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
  <a href="{{ route('admin.menus.index') }} " class="btn btn-danger">
    Cancelar
    <i class="fa fa-ban ml-1"></i>
  </a>
</div>