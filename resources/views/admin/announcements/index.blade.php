@extends('layouts.admin')

@section('title', 'Lista de convocatorias')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_list"></i>
        <span>Lista de convocatorias</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lista de convocatorias</li>
  </ol>
</div>
@endsection

@section('content')
<div class="mb-4">

  <section>

    @include('admin.announcements.partials._form-search')
    <div class="mi-card">

      <!-- Card image -->
      <div class="flex justify-between align-center">

        {{-- <div class="mx-3 h4 white-text">Lista de convocatorias</div> --}}
        @can('convocatorias.registrar')
        <div class="p-6">
          <a href="{{ route('admin.announcements.create') }}" class="btn btn-success text-uppercase waves-effect">
            <i class="mt-0 fas fa-plus"></i>
            Registrar convocatoria
          </a>
        </div>
        @endcan

      </div>
      <!-- /Card image -->

      <div class="px-4">

        <div class="">
          <!-- Table -->
          <table id="announcementsTable" class="table table-responsive table-striped table-bordered table-sm"
            width="100%">

            <!-- Table head -->
            <thead>
              <tr>
                <th class="text-center th-lg font-weight-bold">#</th>
                <th class="text-center th-lg font-weight-bold">Grupo</th>
                <th class="text-center th-lg font-weight-bold">Titulo</th>
                <th class="text-center th-lg font-weight-bold">Número</th>
                <th class="text-center th-lg font-weight-bold">Fecha</th>
                <th class="text-center th-lg font-weight-bold">Estado</th>
                <th class="text-right th-lg disabled-sorting"></th>
              </tr>
            </thead>
            <!-- Table head -->

            <!-- Table body -->
            <tbody>
              @foreach ($announcements as $announcement)
              <tr>
                <td class="text-center font-weight-bold">{{ $announcement->id }}</td>
                <td>{{ $announcement->grupo->nombre }}</td>
                <td>{{ $announcement->titulo }}</td>
                <td>{{ $announcement->numero }}</td>
                <td>{{ $announcement->fecha_format }}</td>
                <td class="text-center">
                  @include('admin.announcements.partials._estado')
                </td>
                <td>
                  @can('convocatorias.ver')
                  <a href="{{ route('admin.announcements.show', $announcement) }}" class="px-2 btn btn-dark btn-sm"
                    data-balloon-pos="down" aria-label="Ver registro">
                    <i class="mt-0 fas fa-eye"></i>
                  </a>
                  @endcan
                  @can('convocatorias.editar')
                  <a href="{{ route('admin.announcements.edit', $announcement) }}" class="px-2 btn btn-info btn-sm"
                    data-balloon-pos="down" aria-label="Editar registro">
                    <i class="mt-0 fas fa-pencil-alt"></i>
                  </a>
                  @endcan
                  @can('convocatorias.eliminar')
                  <button type="button" onclick="onDelete({{ $announcement->id }})" class="px-2 btn btn-danger btn-sm"
                    data-balloon-pos="down" aria-label="Eliminar registro">
                    <i class="mt-0 fas fa-eraser"></i>
                  </button>
                  <form action="{{ route('admin.announcements.destroy', $announcement) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="btn-delete-{{ $announcement->id }}"></button>
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
  $('#announcementsTable').DataTable({
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
        "sInfoPostFix":    "",
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