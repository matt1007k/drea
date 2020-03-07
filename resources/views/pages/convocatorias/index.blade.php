@extends('layouts.app')

@section('title', "{$announcement_group->nombre}")
@section('description', "El postulante podrá presentarse sólo a una (01) convocatoria en curso. De presentarse a más de
una convocatoria simultáneamente, sólo se considerará la primera postulación presentada (según registro de la Oficina de
Atención al Ciudadano y Gestión Documental). Culminado un proceso de convocatoria con la publicación del Resultado
final, puede postular a otra Convocatoria CAS.")

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <div class="d-flex flex-column-reverse flex-sm-row justify-content-sm-between align-items-center">
            <div class="h1 text-custom-primary">
              {{ $announcement_group->nombre }}
            </div>
            <div class="px-2 py-2 bg-white rounded w-25">
              <label for="a" class="font-weight-bold">Año</label>
              <select name="a" id="a" class="mdb-select colorful-select dropdown-primary md-dropdown">
                @forelse($anios as $a)
                <option value="{{ $a }}" @if($a==$anio) selected @endif>{{ $a }}
                </option>
                @empty
                <option value="" disabled>No tienes ningún año...</option>
                @endforelse
              </select>
            </div>
          </div>
          <p class="mt-2">
            {!! $announcement_group->introduccion !!}
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="h3 mt-4 mb-3 text-custom-primary text-center">Convocatorias</div>

          @foreach ($announcements as $announcement)
          <div class="content px-sm-4 py-3 ">
            <div class="d-flex justify-content-between align-items-center">
              <div class="h4 text-custom-primary">{{ $announcement->numero }}</div>
              @include('admin.announcements.partials._estado')
            </div>
            <div class="text-muted mb-3">
              <i class="mr-1 fa fa-calendar-alt"></i>
              {{ $announcement->fecha_format }}
            </div>
            <p>{{ $announcement->titulo }}</p>
            @if ($announcement->links->count() > 0)
            <p class="mt-2">
              <strong>Archivos:</strong>
              <i class="fa fa-paperclip text-info ml-2"></i>
            </p>
            <div class="row d-flex justify-content-center">
              <ol class="col-md-6 list-group">
                @foreach ($announcement->links as $link)
                <li class="pb-2 list-group-item d-flex justify-content-between align-items-center">
                  <span class="font-weight-bold">{{ $link->titulo }} ({{ $link->fecha->format('d-m-Y')}})</span>
                  <a href="{{ $link->url }}" class="ml-2 text-danger">
                    <i class="fa fa-file-pdf fa-2x"></i>
                  </a>
                </li>
                @endforeach
              </ol>
            </div>
            <hr>
            @endif
          </div>
          @endforeach
          <div class="d-flex justify-content-center">
            {{-- {{ $announcements->links() }} --}}
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
  var filter = document.querySelector('#a');
  filter.addEventListener('change', function(ev){
    ev.preventDefault();
    var anio = ev.target.value;
    window.location.href = '/' + '{{ request()->path() }}' + '?a=' + anio; 
  });
</script>
@endpush