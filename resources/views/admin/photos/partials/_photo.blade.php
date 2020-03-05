<div class="mi-card mb-2">
  <div class="mi-card-content">

    <div class="h2 text-black">{{ $photo->album->titulo }}</div>
    <div class="h3 text-blue-700">{{ $photo->titulo }}</div>

    <div class="text-muted mb-3 flex items-center">
      <i class="mi mi-icon_date_range mr-2 text-gray-500"></i>
      {{ $photo->fecha_format }}
    </div>

    <div class="mb-2">
      <img src="{{ $photo->pathImage()}} " alt="imagen" width="200">
    </div>

  </div>

</div>