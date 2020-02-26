@extends('layouts.admin')

@section('title', 'Detalle de menú')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_remove_red_eye"></i>
        <span>Detalle del menú</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.menus.index') }}">Lista de menús</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalle del menú</li>
  </ol>
</div>
@endsection


@section('content')
<div class="container">
  <div class="row flex justify-center">
    <div class="col-md-6">
      <div class="mi-card">
        <div class="mi-card-content">
          <div class="h4 text-center text-info">{{ $menu->titulo }}</div>
          <p><strong>Ruta:</strong> {{ $menu->ruta }}</p>
          <p><strong>Orden:</strong> {{ $menu->orden }}</p>
          <p><strong>Publicado:</strong> @include('admin.menus.partials._publicado') </p>
        </div>
      </div>

    </div>
  </div>
  <div class="row">
    <div class="rounded-lg bg-gray-500 px-3 py-4 mt-3">

      <div class="h4 text-gray-800">
        Submenús
        <a href="{{ route('admin.menus.submenus.create', $menu) }}" class="btn btn-success" data-balloon-pos="down"
          aria-label="Registrar submenú">
          <i class="fa fa-plus"></i>
        </a>
      </div>

      @forelse ($menu->submenus as $submenu)
      @include('admin.submenus.partials._submenu', ['column_class' => 'col-sm-4 mt-3'])
      @empty
      <div class="text-3xl text-red-800">Sin Submenús</div>
      @endforelse
    </div>


  </div>
  <div class="row">
    <a href="{{ route('admin.menus.index')}}" class="btn btn-link">
      <i class="fa fa-arrow-left"></i>
      Regresar
    </a>
  </div>
</div>

@endsection


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