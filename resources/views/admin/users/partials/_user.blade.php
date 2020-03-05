<div class="card mb-2" id="user">
  <div class="card-body">

    <div class="h3 text-blue-700">{{ $user->name }}</div>


    <div class="w-sm-100">
      <strong>Correo Electrónico: </strong>{{ $user->email }}
    </div>

    <div class="mt-3">
      <strong class="h4">Roles:</strong>
      @forelse ($user->roles as $role)
      <p class="p-4">@include('admin.roles.partials._slug')</p>
      @empty
      <p class="p-4 text-2xl text-gray-600">No tienes ningún rol.</p>
      @endforelse
    </div>
    <div class="mt-3">
      <strong class="h4">Permisos especiales:</strong>
      @forelse ($user->permissions as $permission)
      <p class="p-4">@include('admin.permissions.partials._slug')</p>
      @empty
      <p class="p-4 text-2xl text-gray-600">No tienes ningún permiso.</p>
      @endforelse
    </div>

  </div>

</div>