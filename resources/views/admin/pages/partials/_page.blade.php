<div class="card mb-2" id="aviso">
  <div class="card-body">

    @if (request()->is("admin/avisos/". $aviso->slug))
    <div class="h3 text-custom-primary">{{ $aviso->titulo }}</div>
    @endif

    <div class="text-muted mb-2">
      <i class="mr-1 fa fa-calendar-alt"></i>
      {{ $aviso->fecha_format }}
      <span>
        . <i class="mr-1 fa fa-clock"></i>
        {{ $aviso->fechaDiffForHumans }}
      </span>
    </div>


    <div class="content w-sm-100">
      {!! $aviso->contenido !!}
    </div>

    @if( request()->is('/') || request()->is("avisos"))
    <div class="d-flex justify-content-end">
      <a href="{{ $aviso->pathPage() }} " class="btn btn-link text-dark">
        Ver más
        <div class="fa fa-arrow-right ml-2"></div>
      </a>
    </div>
    @endif
  </div>

</div>