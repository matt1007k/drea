@extends('layouts.admin')

@section('title', 'Detalle de convocatoria')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_remove_red_eye"></i>
        <span>Detalle del convocatoria</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.announcements.index') }}">Lista de convocatorias</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalle del convocatoria</li>
  </ol>
</div>
@endsection


@section('content')
<div class="container">
  <div class="row rounded-lg bg-white px-8">
    <div class="h4 text-blue-800">Grupo: {{ $announcement->grupo->nombre }}</div>
    @include('admin.announcements.partials._announcement', ['column_class' => 'col-md-12'])


  </div>
  <div class="row">
    <div class="col-md-12 rounded-lg bg-gray-500 px-3 py-4 mt-3">

      <div class="h4 text-gray-800">
        @can('cv.enlaces.registrar')
        Enlaces
        <a href="{{ route('admin.announcements.links.create', $announcement) }}" class="btn btn-success"
          data-balloon-pos="down" aria-label="Registrar enlace">
          <i class="fa fa-plus"></i>
        </a>
        @endcan
      </div>


    </div>

    <div class="col-md-12 links">
      @can('cv.enlaces.lista')
      @forelse ($announcement->links as $link)
      @include('admin.announcement_links.partials._announcement_link', ['column_class' => 'link-item'])
      @empty
      <div class="bg-white p-4 text-center text-4xl font-normal text-gray-800">Sin enlaces</div>
      @endforelse
      @endcan
    </div>
  </div>
  <div class="row">
    <a href="{{ route('admin.announcements.index')}}" class="btn btn-link">
      <i class="fa fa-arrow-left"></i>
      Regresar
    </a>
  </div>
</div>

@endsection

@push('styles')
<style>
  .links {
    display: grid;
    grid-gap: 2em;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  }
</style>
@endpush

@push('scripts')
<script>
  function onDelete(id) {
      swal({
          title: 'Estás seguro de eliminar el registro?',
          type: 'warning',
          showCloseButton: true,
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          focusConfirm: false,
          confirmButtonText: '<i class="fa fa-check"></i> Si, eliminar',
          cancelButtonText: '<i class="fa fa-ban"></i> Cancelar',
      }).then((result) => {
          if (result.value) {
              $("#btn-delete-"+ id).click();

          }
      })
  }
</script>
@endpush