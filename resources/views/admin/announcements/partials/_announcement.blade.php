<div class="{{ $column_class }} mb-4">

  <div class="d-flex">

    <div class="content">
      <div class="h5">{{ $announcement->titulo }} </div>

      <div class="text-muted mb-2">
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