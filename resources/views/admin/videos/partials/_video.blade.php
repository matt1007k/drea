<div class="card mb-2">
  <div class="card-body">

    <div class="h3 text-custom-primary">{{ $video->titulo }}</div>

    <div class="text-muted mb-2">
      {{ $video->fecha_format }}
    </div>

    <div class="mb-2">
    </div>

    <div class="w-sm-100">
      Publicado: @include('admin.videos.partials._publicado')
    </div>

  </div>

</div>