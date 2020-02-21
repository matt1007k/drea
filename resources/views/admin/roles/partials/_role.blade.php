<div class="card mb-2" id="role">
  <div class="card-body">

    <div class="h3 text-custom-primary">{{ $role->name }}</div>

    <div>@include('admin.roles.partials._slug')</div>

    <div class="w-sm-100">
      {{ $role->description }}
    </div>

  </div>

</div>