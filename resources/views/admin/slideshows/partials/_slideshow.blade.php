<div class="mi-card mb-2">
  <div class="mi-card-content">

    <div class="h3 text-custom-primary">{{ $slideshow->titulo }}</div>

    <div class="text-muted mb-3 flex items-center">
      <i class="mi mi-icon_date_range mr-2 text-gray-500"></i>
      {{ $slideshow->fecha_format }}
    </div>

    <div class="mb-2">
      <img src="{{ $slideshow->pathImage() }} " alt="imagen" width="100%">
    </div>

    <div class="w-sm-100">
      {{ $slideshow->descripcion }}
    </div>

  </div>

</div>