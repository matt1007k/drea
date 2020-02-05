<div class="card mb-2" id="aviso">
  <div class="card-body">

    @if (request()->is("admin/avisos/". $aviso->slug))
    <div class="h3 text-custom-primary">{{ $aviso->titulo }}</div>
    @endif

    <div class="text-muted mb-2">
      {{ $aviso->fecha->format('d M yy') }}
    </div>


    <div class="w-sm-100">
      {!! $aviso->contenido !!}
    </div>

    @if( request()->is('/') || request()->is("avisos"))
    <a href="{{ $aviso->pathPage() }} " class="btn btn-outline-info btn-sm btn-rounded">Ver mas</a>
    @endif
  </div>

</div>