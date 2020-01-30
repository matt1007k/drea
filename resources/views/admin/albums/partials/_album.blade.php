<div class="card mb-2">
  <div class="card-body">

    <div class="h3 text-custom-primary">{{ $album->titulo }}</div>

    <div class="text-muted mb-2">
      {{ $album->fecha->format('d M yy') }}
    </div>

    <div class="mb-2">
      <img src="{{ Storage::url($album->imagen)}} " alt="imagen" width="200">
    </div>

    <div class="w-sm-100">
      {{ $album->descripcion }}
    </div>

  </div>

</div>