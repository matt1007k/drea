<div class="{{ $column_class }} mb-4">

  <div class="d-flex">
    <a href="#" class="image mr-3 d-flex align-items-start">
      <i class="text-danger fa fa-file-pdf fa-4x"></i>
    </a>

    <div class="content">

      <a href="#" class="h5">
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