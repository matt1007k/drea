<div class="card mb-2" id="permission">
  <div class="card-body">

    <div class="h3 text-custom-primary">{{ $permission->name }}</div>

    <div class="mb-4">@include('admin.permissions.partials._slug')</div>

    <div class="w-sm-100">
      {{ $permission->description }}
    </div>

  </div>

</div>