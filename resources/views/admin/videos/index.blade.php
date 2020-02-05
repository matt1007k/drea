@extends('layouts.admin')

@section('title', 'Lista de videos')

@section('breadcrumb')
<nav aria-label="breadcrumb" class="mb-2">
  <ol class="px-2 py-2 bg-white breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lista de videos</li>
  </ol>
</nav>
@endsection

@section('content')
<div class="mb-4 container-fluid">

  <section>

    @include('admin.videos.partials._form-search')
    <div class="card card-cascade narrower z-depth-1">

      <!-- Card image -->
      <div
        class="py-2 mx-4 mb-3 view view-cascade gradient-card-header blue-gradient narrower d-flex justify-content-between align-items-center">

        <div class="mx-3 h4 white-text">Lista de videos</div>

        <div>
          <a href="{{ route('admin.videos.create') }}"
            class="px-2 btn btn-outline-white btn-rounded btn-sm waves-effect waves-light" data-toggle="tooltip"
            data-placement="bottom" title="Registrar álbum">
            <i class="mt-0 fas fa-plus"></i>
          </a>
        </div>

      </div>
      <!-- /Card image -->

      <div class="px-4">

        <div class="">
          <!-- Table -->
          <table id="videosTable" class="table table-responsive table-striped table-bordered table-sm" width="100%">

            <!-- Table head -->
            <thead>
              <tr>
                <th class="th-lg text-center font-weight-bold">#</th>
                <th class="th-lg text-center font-weight-bold">Video</th>
                <th class="th-lg text-center font-weight-bold w-100">Titulo</th>
                <th class="th-lg text-center font-weight-bold">Fecha</th>
                <th class="th-lg text-center font-weight-bold">Publicado</th>
                <th class="text-right th-lg disabled-sorting"></th>
              </tr>
            </thead>
            <!-- Table head -->

            <!-- Table body -->
            <tbody>
              @foreach ($videos as $video)
              <tr>
                <td class="text-center font-weight-bold">{{ $video->id }}</td>
                <td>{{ $video->video }}</td>
                <td>{{ $video->titulo }}</td>
                <td>{{ $video->fecha_format }}</td>
                <td class="text-center">
                  @include('admin.videos.partials._publicado')
                </td>
                <td>
                  <a href="{{ route('admin.videos.show', $video) }}"
                    class="px-2 btn btn-outline-dark btn-rounded btn-sm" data-toggle="tooltip" data-placement="bottom"
                    title="Ver registro">
                    <i class="mt-0 fas fa-eye"></i>
                  </a>
                  <a href="{{ route('admin.videos.edit', $video) }}" class="px-2 btn
                  btn-outline-info btn-rounded btn-sm" data-toggle="tooltip" data-placement="bottom"
                    title="Editar registro">
                    <i class="mt-0 fas fa-pencil-alt"></i>
                  </a>
                  <button type="button" onclick="onDelete({{ $video->id }})"
                    class="px-2 btn btn-outline-danger btn-rounded btn-sm" data-toggle="tooltip" data-placement="bottom"
                    title="Eliminar registro">
                    <i class="mt-0 fas fa-eraser"></i>
                  </button>
                  <form action="{{ route('admin.videos.destroy', $video) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="btn-delete-{{ $video->id }}"></button>
                  </form>
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
  $('#videosTable').DataTable({
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
      Swal.fire({
          title: 'Estás seguro de eliminar el registro?',
          icon: 'warning',
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