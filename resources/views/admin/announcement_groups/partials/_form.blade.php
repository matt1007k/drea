@csrf

<div class="form-group">
  <div class="mi-input @error('nombre') mi-error @enderror">
    <label for="nombre" class="mi-input-label">Nombre</label>
    <input type="text" name="nombre" id="nombre" class="form-control "
      value="{{ old('nombre', $announcement_group->nombre) }}" autocomplete="nombre" autofocus>
  </div>
  @error('nombre')
  <div class="error" dusk="error-nombre">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="form-group">
  <div class="mi-input @error('nombre') mi-error @enderror">
    <label for="nombre" class="mi-input-label">Año</label>
    <input type="text" name="anio" id="anio" class="form-control" value="{{ old('anio', $announcement_group->anio) }}"
      autocomplete="anio" autofocus>
  </div>
  @error('anio')
  <div class="error" dusk="error-anio">
    {{ $message }}
  </div>
  @enderror
</div>


<div class="form-group mb-5">
  <label for="introduccion">Introducción</label>
  <textarea style="min-height:300px" rows="10" id="introduccion" name="introduccion"
    class="form-control @error('introduccion') is-invalid @enderror" value="" autocomplete="introduccion"
    autofocus>{!! old('introduccion', $announcement_group->introduccion) !!}</textarea>
  @error('introduccion')
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
  <a href="{{ route('admin.announcement_groups.index') }} " class="btn btn-danger text-uppercase">
    Cancelar
    <i class="fa fa-ban ml-1"></i>
  </a>
</div>

@push('scripts')
<script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'introduccion' , {
    filebrowserUploadUrl: "{{route('admin.groups.upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
  } );
  CKEDITOR.editorConfig = function( config ) {
    config.language = 'es';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;
  };
</script>
@endpush