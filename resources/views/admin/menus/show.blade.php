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
  <div class="row">
    <div class="col-md-12">
      <div class="mi-card">
        <div class="mi-card-content">
          <div class="h4 text-info">{{ $menu->titulo }}</div>
          <p><strong>Ruta:</strong> {{ $menu->ruta }}</p>
          <p><strong>Orden:</strong> {{ $menu->orden }}</p>
          <p><strong>Publicado:</strong> @include('admin.menus.partials._publicado') </p>
        </div>
      </div>
    </div>
  </div>
  @unless ($menu->urlExisted() || $menu->submenus()->count() > 1)
  <div class="row">
    <div class="col-md-12">
      <div class="mi-card">
        <div class="mi-card-content text-center">
          @if ($menu->page()->count() > 0)
          <a href="{{ url($menu->ruta) }}" target="_blank" class="btn btn-primary text-uppercase">
            Ver página
          </a>
          <a href="{{ route('admin.menus.pages.edit',[$menu, $menu->page]) }}" class="btn btn-info text-uppercase">
            Editar página
          </a>
          <button onclick="onDeletePage({{$menu->page->id}})" class="btn btn-danger text-uppercase">
            Eliminar página
          </button>
          <form id="btn-delete-page{{ $menu->page->id }}"
            action="{{ route('admin.menus.pages.destroy',[$menu, $menu->page]) }}" method="POST">
            @csrf
            @method('DELETE')
          </form>
          @else

          <a href="{{ route('admin.menus.pages.create', $menu) }}" class="btn btn-primary text-uppercase">
            Agregar página
          </a>
          @endif
        </div>
      </div>
    </div>
  </div>
  @endunless

  <div class="row">
    <div class="col-md-12 rounded-lg bg-gray-500 px-3 py-4 mt-3 mb-8">

      <div class="h4 text-gray-800">
        Submenús
        <a href="{{ route('admin.menus.submenus.create', $menu) }}" class="btn btn-success" data-balloon-pos="down"
          aria-label="Registrar submenú">
          <i class="fa fa-plus"></i>
        </a>
      </div>

    </div>
    @forelse ($menu->submenus as $submenu)
    @include('admin.submenus.partials._submenu', ['column_class' => 'col-12 mt-3'])
    @empty
    <div class="bg-white p-4 text-center font-normal text-muted text-4xl ">Sin submenús...</div>
    @endforelse


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

  function onDeletePage(pageId) {
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
              $("#btn-delete-page"+ pageId).submit();

          }
      })
  }

  function onDeleteSubpage(subPageId) {
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
              $("#btn-delete-subpage"+ subPageId).submit();

          }
      })
  }
</script>
@endpush