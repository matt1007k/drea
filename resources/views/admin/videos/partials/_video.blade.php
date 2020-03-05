<div class="mi-card mb-2">
  <div class="mi-card-content">

    <div class="h3 text-blue-700">{{ $video->titulo }}</div>

    <div class="text-muted mb-3 flex items-center">
      <i class="mi mi-icon_date_range mr-2 text-gray-500"></i>
      {{ $video->fecha_format }}
    </div>

    <div class="mb-2">
      <strong>Video:</strong>
      <div class="flex justify-center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $video->video }}" frameborder="0"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

    <div class="w-sm-100">
      <strong>Publicado:</strong> @include('admin.videos.partials._publicado')
    </div>

  </div>

</div>