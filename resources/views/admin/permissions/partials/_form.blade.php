@csrf

<div class="form-group">
  <div class="mi-input @error('name') mi-error @enderror">
    <label for="name" class="mi-input-label">Nombre</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $permission->name) }}"
      autocomplete="name" autofocus>
  </div>
  @error('name')
  <label id="name-error" class="error" for="name">
    {{ $message }}
  </label>
  @enderror
</div>

<div class="form-group">
  <div class="mi-input @error('slug') mi-error @enderror">
    <label for="slug" class="mi-input-label">Identificador</label>
    <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $permission->slug) }}"
      autocomplete="slug" autofocus>
  </div>
  @error('slug')
  <label id="slug-error" class="error" for="slug">
    {{ $message }}
  </label>
  @enderror
</div>


<div class="form-group">
  <div class="mi-input @error('description') mi-error @enderror">
    <label for="description" class="mi-input-label">Descripción</label>
    <textarea rows="3" id="description" name="description" class="md-textarea form-control"
      autofocus>{{ old('description', $permission->description) }}</textarea>
  </div>
  @error('description')
  <div id="description-error" class="error">
    {{ $message }}
  </div>
  @enderror
</div>



<div class="d-flex justify-content-between mt-4">
  <button class="btn btn-success text-uppercase" dusk="btn-registrar">
    {{ $btnText }}
    <i class="fa fa-check ml-1"></i>
  </button>
  <a href="{{ route('admin.permissions.index') }} " class="btn btn-danger text-uppercase">
    Cancelar
    <i class="fa fa-ban ml-1"></i>
  </a>
</div>