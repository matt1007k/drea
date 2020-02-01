<div class="card mb-2">
  <div class="card-body">

    <div class="h3 text-custom-primary">{{ $announcement_group->nombre }}</div>

    <div class="text-muted mb-2">
      {{ $announcement_group->created_at->format('d M yy') }}
    </div>


    <div class="w-sm-100">
      Año: {{ $announcement_group->anio }}
    </div>

  </div>

</div>