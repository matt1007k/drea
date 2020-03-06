@csrf

<div class="form-group">
  <div class="mi-input @error('titulo') mi-error @enderror">
    <label for="titulo" class="mi-input-label">Titulo</label>
    <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo', $post->titulo) }}"
      autocomplete="titulo" autofocus>
  </div>
  @error('titulo')
  <label id="titulo-error" class="error" for="titulo">
    {{ $message }}
  </label>
  @enderror
</div>

<div class="form-group">
  <div class="mi-input @error('fecha') mi-error @enderror">
    <div class="font-weigth-bold">Fecha y hora de publicación</div>
    <input placeholder="Seleccionar fecha" type="text" id="fecha" name="fecha" class="form-control"
      value="{{ old('fecha', $post->fecha) }}" autocomplete="fecha" autofocus>
  </div>
  @error('fecha')
  <div id="fecha-error" class="text-danger">
    {{ $message }}
  </div>
  @enderror
</div>

<h6 class="mb-0">Publicado</h6>
<div class="form-group mt-0">
  <div class="mi-switch">
    <label>
      No
      <input type="checkbox" name="publicado" @if(old('publicado', $post->publicado) == 1) checked
      @endif
      >
      <span class="lever"></span> Si
    </label>
  </div>
</div>

<div class="form-group mb-5">
  <label for="contenido">Contenido</label>
  <textarea style="min-height:300px" rows="10" id="contenido" name="contenido"
    class="form-control @error('contenido') is-invalid @enderror" value="" autocomplete="contenido"
    autofocus>{!! old('contenido', $post->contenido) !!}</textarea>
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
  <a href="{{ route('admin.posts.index') }} " class="btn btn-danger text-uppercase">
    Cancelar
    <i class="fa fa-ban ml-1"></i>
  </a>
</div>

@push('scripts')
<script src="{{ asset('vendors/ckeditor/ckeditor.js') }}"></script>
<script src="https://kendo.cdn.telerik.com/2019.2.514/js/cultures/kendo.culture.es-ES.min.js"></script>
<script>
  CKEDITOR.replace( 'contenido', {
    filebrowserUploadUrl: "{{route('admin.posts.upload', ['_token' => csrf_token() ])}}",
    filebrowserUploadMethod: 'form'
  } );
  CKEDITOR.editorConfig = function( config ) {
    config.language = 'es';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;
    config.extraPlugins = 'uploadimage';
  };


  // Data Picker Initialization
  $('#fecha').kendoDateTimePicker({
      culture: "es-ES",
      // dateInput: true,
      timeFormat: "HH:mm",
      format: "dd-MM-yyyy HH:mm tt",
      value: new Date(
        {{$post->fecha->format('Y')}}, 
        {{$post->fecha->format('m') - 1 }}, 
        {{$post->fecha->format('d')}}, 
        {{$post->fecha->format('H')}}, 
        {{$post->fecha->format('i')}}, 
        {{$post->fecha->format('s')}}
      ),
      min: new Date(2010, 1, 1, 8, 0, 0),
      max: new Date()
  });
</script>
@endpush