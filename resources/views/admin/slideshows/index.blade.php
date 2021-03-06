@extends('layouts.admin')

@section('title', 'Lista de slideshows')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_list"></i>
        <span>Lista de slideshows</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lista de slideshows</li>
  </ol>
</div>
@endsection

@section('content')
<div class="mb-4 container">

  <section>

    @include('admin.slideshows.partials._form-search')
    <div class="mi-card">

      <!-- Card image -->
      <div
        class="py-2 mx-4 mb-3 view view-cascade gradient-card-header blue-gradient narrower d-flex justify-content-between align-items-center">

        {{-- <div class="mx-3 h4 white-text">Lista de slideshowes</div> --}}
        @can('slideshows.registrar')
        <div class="py-3">
          <a href="{{ route('admin.slideshows.create') }}" class="btn btn-success btn-sm waves-effect text-uppercase">
            <i class="mt-0 fas fa-plus"></i>
            Registrar slideshow
          </a>
        </div>
        @endcan

      </div>
      <!-- /Card image -->

      <div class="px-4">

        <div class="">
          <!-- Table -->
          <table id="slideshowsTable" class="table table-responsive table-striped table-bordered table-sm" width="100%">

            <!-- Table head -->
            <thead>
              <tr>
                <th class="th-lg text-center font-weight-bold">#</th>
                <th class="th-lg text-center font-weight-bold">Imagen</th>
                <th class="th-lg text-center font-weight-bold">Titulo</th>
                <th class="th-lg text-center font-weight-bold">Descripción</th>
                <th class="th-lg text-center font-weight-bold">Fecha</th>
                <th class="th-lg text-center font-weight-bold">Publicado</th>
                <th class="text-right th-lg disabled-sorting"></th>
              </tr>
            </thead>
            <!-- Table head -->

            <!-- Table body -->
            <tbody>
              @foreach ($slideshows as $slideshow)
              <tr>
                <td class="text-center font-weight-bold">{{ $slideshow->id }}</td>
                <td><img src="{{ $slideshow->pathImage() }}" alt="{{ $slideshow->titulo }}" width="100"></td>
                <td>{{ $slideshow->titulo }}</td>
                <td>{{ $slideshow->descripcion }}</td>
                <td>{{ $slideshow->fecha_format }}</td>
                <td class="text-center">
                  @include('admin.slideshows.partials._publicado')
                </td>
                <td>
                  @can('slideshows.ver')
                  <a href="{{ route('admin.slideshows.show', $slideshow) }}" class="px-2 btn
                  btn-dark btn-sm" data-balloon-pos="down" aria-label="Ver registro">
                    <i class="mt-0 fas fa-eye"></i>
                  </a>
                  @endcan
                  @can('slideshows.editar')
                  <a href="{{ route('admin.slideshows.edit', $slideshow) }}" class="px-2 btn
                  btn-info btn-sm" data-balloon-pos="down" aria-label="Editar registro">
                    <i class="mt-0 fas fa-pencil-alt"></i>
                  </a>
                  @endcan
                  @can('slideshows.eliminar')
                  <button type="button" onclick="onDelete({{ $slideshow->id }})" class="px-2 btn btn-danger btn-sm"
                    data-balloon-pos="down" aria-label="Eliminar registro">
                    <i class="mt-0 fas fa-eraser"></i>
                  </button>
                  <form action="{{ route('admin.slideshows.destroy', $slideshow) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="btn-delete-{{ $slideshow->id }}"></button>
                  </form>
                  @endcan
                </td>
              </tr>
              @endforeach

            </tbody>
            <!-- Table body -->
          </table>
          <!-- Table -->
        </div>


      </div>
    </div>

  </section>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('/css/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('/css/datatables-select.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('/js/datatables.min.js') }}"></script>
<script src="{{ asset('/js/datatables-select.min.js') }}"></script>
<script>
  $('#slideshowsTable').DataTable({
    "sort":  [[ 3, "asc" ]],
    "searching": false,
    language: {
        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfopostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":     "Último",
            "sNext":     "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    }
  });
  $('.dataTables_length').addClass('bs-select');

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