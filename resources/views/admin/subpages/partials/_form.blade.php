@csrf

<div class="form-group">
  <div class="mi-input @error('titulo') mi-error @enderror">
    <label for="titulo" class="mi-input-label">Titulo</label>
    <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo', $page->titulo) }}"
      autocomplete="titulo" autofocus>
  </div>
  @error('titulo')
  <label id="titulo-error" class="error" for="titulo">
    {{ $message }}
  </label>
  @enderror
</div>


<div class="form-group">
  <div class="mi-input @error('descripcion') mi-error @enderror">
    <label for="descripcion" class="mi-input-label">Descripcion</label>
    <textarea rows="3" id="descripcion" name="descripcion" class="form-control" autocomplete="descripcion"
      autofocus>{{ old('descripcion', $page->descripcion) }}</textarea>
  </div>
  @error('descripcion')
  <div class="error" dusk="error-descripcion">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group mb-5">
  <label for="contenido">Contenido</label>
  <textarea style="min-height:300px" rows="10" id="contenido" name="contenido"
    class="form-control @error('contenido') is-invalid @enderror" value="" autocomplete="contenido"
    autofocus>{!! old('contenido', $page->contenido) !!}</textarea>
  @error('contenido')
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

  <a href="{{ route('admin.menus.show', $menu) }} " class="btn btn-danger text-uppercase">
    Cancelar
    <i class="fa fa-ban ml-1"></i>
  </a>
</div>

@push('scripts')
<script src="{{ asset('vendors/ckeditor/ckeditor.js') }}"></script>
<script>
  CKEDITOR.replace( 'contenido', {
    filebrowserUploadUrl: "{{route('admin.pages.upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
  } );
  CKEDITOR.editorConfig = function( config ) {
    config.language = 'es';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;
    config.extraPlugins = 'uploadimage';
  };
</script>
@endpush