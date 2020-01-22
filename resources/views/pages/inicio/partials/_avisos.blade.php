@foreach ($avisos as $aviso)
<div class="card mb-2">
  <div class="card-body">

    <div class="text-muted mb-2">
      {{ $aviso->fecha->format('d M yy') }}
    </div>


    <div class="text-justify">
      {!! $aviso->contenido !!}
    </div>

    <a href="#" class="btn btn-info btn-sm btn-rounded">Ver mas</a>
  </div>

</div>
@endforeach