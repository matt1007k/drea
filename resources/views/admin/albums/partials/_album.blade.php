<div class="mi-card mb-2">
  <div class="mi-card-content">

    <div class="h3 text-blue-700">{{ $album->titulo }}</div>

    <div class="text-muted mb-3 flex items-center">
      <i class="mi mi-icon_date_range mr-2 text-gray-500"></i>
      {{ $album->fecha->format('d M yy') }}
    </div>

    <div class="mb-2">
      <img src="{{ $album->pathImage() }} " alt="imagen" width="200">
    </div>

    <div class="w-sm-100">
      {{ $album->descripcion }}
    </div>

  </div>

</div>