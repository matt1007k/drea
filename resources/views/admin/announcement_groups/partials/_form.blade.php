@csrf

<div class="md-form">
  <label for="nombre">Nombre</label>
  <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror "
    value="{{ old('nombre', $announcement_group->nombre) }}" autocomplete="nombre" autofocus>
  @error('nombre')
  <div class="invalid-feedback" dusk="error-nombre">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="md-form">
  <label for="anio">Año</label>
  <input type="text" name="anio" id="anio" class="form-control @error('anio') is-invalid @enderror "
    value="{{ old('anio', $announcement_group->anio) }}" autocomplete="anio" autofocus>
  @error('anio')
  <div class="invalid-feedback" dusk="error-anio">
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
  <button class="btn btn-success" dusk="btn-registrar">
    {{ $btnText }}
    <i class="fa fa-check ml-1"></i>
  </button>
  <a href="{{ route('admin.announcement_groups.index') }} " class="btn btn-danger">
    Cancelar
    <i class="fa fa-ban ml-1"></i>
  </a>
</div>

@push('scripts')
<script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'introduccion' );
  CKEDITOR.editorConfig = function( config ) {
    config.language = 'es';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;
  };
</script>
@endpush