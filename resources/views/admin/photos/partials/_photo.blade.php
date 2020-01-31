<div class="card mb-2">
  <div class="card-body">

      <div class="h2 text-custom-primary-dark">{{ $photo->album->titulo }}</div>
      <div class="h3 text-custom-primary">{{ $photo->titulo }}</div>

    <div class="text-muted mb-2">
      {{ $photo->fecha_format }}
    </div>

    <div class="mb-2">
      <img src="{{ $photo->pathImage()}} " alt="imagen" width="200">
    </div>

  </div>

</div>
