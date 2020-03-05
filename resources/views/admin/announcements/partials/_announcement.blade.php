<div class="{{ $column_class }} mb-4">

  <div class="d-flex">

    <div class="content">
      <div class="h4">{{ $announcement->titulo }} </div>

      <div class="text-muted mb-3 flex items-center">
        <i class="mi mi-icon_date_range mr-2 text-gray-500"></i>
        {{ $announcement->fecha_format }}
      </div>
      <p class="text-justify mb-2">
        <strong>Número:</strong> {{ $announcement->numero }}
      </p>
      <p class="text-justify">
        <strong>Estado:</strong> @include('admin.announcements.partials._estado')
      </p>
    </div>
  </div>

</div>