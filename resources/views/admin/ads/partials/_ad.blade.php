<div class="mi-card mb-2">
  <div class="mi-card-content">

    <div class="h3 text-blue-700">
      <a href="{{ $ad->url }}">
        {{ $ad->titulo }}
      </a>
    </div>

    <div class="text-muted mb-3 flex items-center">
      <i class="mi mi-icon_date_range mr-2 text-gray-500"></i>
      {{ $ad->created_at->format('d F, yy') }}
    </div>

    <div class="mb-2">
      <img src="{{ $ad->pathImage() }} " alt="imagen" width="200">
    </div>
  </div>

</div>