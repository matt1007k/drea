@csrf

<div class="form-group">
  <div class="mi-input @error('name') mi-error @enderror">
    <label for="name" class="mi-input-label">Nombre</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $role->name) }}"
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
    <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $role->slug) }}"
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
      autofocus>{{ old('description', $role->description) }}</textarea>
  </div>
  @error('description')
  <div id="description-error" class="error">
    {{ $message }}
  </div>
  @enderror
</div>

<div class="h4">Permiso especial</div>
<div class="form-group">
  <input type="radio" name="special" id="special-all-access" value="all-access" class="mi-radio-state bg-purple"
    @if($role->special == "all-access") checked @endif>
  <label class="m-r-30" for="special-all-access">Acceso total</label>

  <input type="radio" name="special" id="special-no-access" value="no-access" class="mi-radio-state bg-purple"
    @if($role->special == "no-access") checked @endif>
  <label class="m-r-30" for="special-no-access">Ningún acceso</label>

</div>

<hr>
<div class="h4">Lista de Permisos</div>
<div class="form-group">
  <ul class="list-unstyled">
    @foreach($permissions as $permission)
    <li>
      <input type="checkbox" id="permission-{{ $permission->slug }}" name="permissions[]"
        value="{{ $permission->slug }}" @foreach ($role->permissions as $r_permission)
      @if($r_permission->id == $permission->id) checked @endif
      @endforeach>
      <label class="m-r-30"
        for="permission-{{ $permission->slug }}"><em>({{$permission->description ?: 'Sin descripción'}})</em></label>

    </li>
    @endforeach
  </ul>
</div>


<div class="d-flex justify-content-between mt-4">
  <button class="btn btn-success text-uppercase" dusk="btn-registrar">
    {{ $btnText }}
    <i class="fa fa-check ml-1"></i>
  </button>
  <a href="{{ route('admin.roles.index') }} " class="btn btn-danger text-uppercase">
    Cancelar
    <i class="fa fa-ban ml-1"></i>
  </a>
</div>