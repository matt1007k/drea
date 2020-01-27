<div class="{{ $column_class }} mb-4">

  <div class="d-flex">
    <a href="{{ $document->url }}" target="_blank" class="mr-3 image d-flex align-items-start">
      <i class="text-danger fa fa-file-pdf fa-4x"></i>
    </a>

    <div class="content">

      <a href="{{ $document->url }}" target="_blank" class="h5">
        {{ $document->titulo }}
      </a>
      <p class="text-justify">
        {{ $document->descripcion}}
      </p>
      <div class="text-muted">
        {{ $document->created_at->format('d M yy') }}
      </div>
    </div>
  </div>

</div>
