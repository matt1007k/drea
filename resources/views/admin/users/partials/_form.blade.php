@csrf

<div class="form-group">
  <div class="mi-input @error('name') mi-error @enderror">
    <label for="name" class="mi-input-label">Nombre</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}"
      autocomplete="name" autofocus>
  </div>
  @error('name')
  <label id="name-error" class="error" for="name">
    {{ $message }}
  </label>
  @enderror
</div>

<div class="form-group">
  <div class="mi-input @error('email') mi-error @enderror">
    <label for="email" class="mi-input-label">Correo Electrónico</label>
    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}"
      autocomplete="email" autofocus>
  </div>
  @error('email')
  <label id="email-error" class="error" for="email">
    {{ $message }}
  </label>
  @enderror
</div>

@if(request()->is('admin/users/create'))
<div class="form-group">
  <div class="mi-input @error('password') mi-error @enderror">
    <label for="password" class="mi-input-label">Contraseña</label>
    <input type="password" name="password" id="password" class="form-control"
      value="{{ old('password', $user->password) }}" autocomplete="password" autofocus>
  </div>
  @error('password')
  <label id="password-error" class="error" for="password">
    {{ $message }}
  </label>
  @enderror
</div>
@endif

<div class="h4">Lista de Roles</div>
<div class="form-group">
  <ul class="list-unstyled">
    @foreach($roles as $role)
    <li>
      <input type="checkbox" id="role-{{ $role->slug }}" name="roles[]" value="{{ $role->slug }}" @foreach ($user->roles
      as $r_role)
      @if($r_role->id == $role->id) checked @endif
      @endforeach>
      <label class="m-r-30" for="role-{{ $role->slug }}"><em>({{$role->description ?: 'Sin descripción'}})</em></label>

    </li>
    @endforeach
  </ul>
</div>
<div class="d-flex justify-content-between mt-4">
  <button class="btn btn-success text-uppercase" dusk="btn-registrar">
    {{ $btnText }}
    <i class="fa fa-check ml-1"></i>
  </button>
  <a href="{{ route('admin.users.index') }} " class="btn btn-danger text-uppercase">
    Cancelar
    <i class="fa fa-ban ml-1"></i>
  </a>
</div>