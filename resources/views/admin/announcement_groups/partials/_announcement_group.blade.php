<div class="mi-card mb-2">
  <div class="mi-card-content">

    <div class="h3 text-primary">{{ $announcement_group->nombre }}</div>

    <div class="text-muted mb-3 flex items-center">
      <i class="mi mi-icon_date_range mr-2 text-gray-500"></i>
      {{ $announcement_group->created_at->format('d F, yy') }}
    </div>


    <div class="w-sm-100">
      <strong>Año:</strong> {{ $announcement_group->anio }}
    </div>

  </div>

</div>