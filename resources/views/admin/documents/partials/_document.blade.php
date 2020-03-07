<div class="{{ $column_class }} mb-4">
  <div class="card">
    <div class="card-body d-flex flex">
      <a href="{{ $document->url }}" target="_blank" class="mr-3 image d-flex align-items-start">
        <img height="200px" src="{{ asset('/img/icons/eq_document.png') }}" alt="{{ $document->titulo }}">
      </a>

      <div>
        <h5 class="card-title text-uppercase text-3xl xs:mb-3"><strong>{{ $document->titulo }}</strong></h5>
        <hr>
        <p class="card-text mb-3 text-justify">
          {{ $document->descripcion}}
        </p>
        <div class="d-flex justify-content-between align-items-center flex justify-between items-center ">
          <div class="font-small text-muted mb-2">
            <i class="mr-1 fa fa-calendar-alt"></i>
            {{ $document->created_at->format('d F, Y') }}
            <span>
              . <i class="mr-1 fa fa-clock"></i>
              {{ $document->created_at->format('H:m:s') }}
            </span>
          </div>
          <p class="text-right mb-0 font-small font-weight-bold"><a href="{{ $document->url }}" target="_blank"><img
                alt="" src="/storage/uploads/content_dowload.png" style="width: 45px; height: 45px;"></a></p>
        </div>
      </div>
    </div>
  </div>
</div>