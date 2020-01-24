@extends('layouts.admin')

@section('title', 'Lista de documentos')

@section('breadcrumb')
<nav aria-label="breadcrumb" class="mb-2">
  <ol class="breadcrumb bg-white py-2 px-2">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lista de documentos</li>
  </ol>
</nav>
@endsection

@section('content')
<div class="container-fluid mb-4">

  <section>

    @include('admin.documents.partials._form-search')
    <div class="card card-cascade narrower z-depth-1">

      <!-- Card image -->
      <div
        class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

        <div class="h4 white-text mx-3">Lista de documentos</div>

        <div>
          <a href="{{ route('admin.documents.create') }}"
            class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light" data-toggle="tooltip"
            data-placement="bottom" title="Registrar documento">
            <i class="fas fa-plus mt-0"></i>
          </a>
        </div>

      </div>
      <!-- /Card image -->

      <div class="px-4">

        <div class="">
          <!-- Table -->
          <table id="documentsTable" class="table-responsive table table-striped table-bordered table-sm" width="100%">

            <!-- Table head -->
            <thead>
              <tr>
                <th class="th-lg">#</th>
                <th class="th-lg">Tipo</th>
                <th class="th-lg">Titulo</th>
                <th class="th-lg">Url</th>
                <th class="th-lg">Descripción</th>
                <th class="th-lg disabled-sorting text-right"></th>
              </tr>
            </thead>
            <!-- Table head -->

            <!-- Table body -->
            <tbody>
              @foreach ($documents as $document)
              <tr>
                <td>{{ $document->id }}</td>
                <td>{{ $document->tipo->nombre }}</td>
                <td>{{ $document->titulo }}</td>
                <td><a href="{{ $document->url }}" dusk="url-{{$document->id}}"><i class="fa fa-file"></i></a></td>
                <td>{{ $document->descripcion }}</td>
                <td>
                  <button type="button" class="btn btn-outline-info btn-rounded btn-sm px-2" data-toggle="tooltip"
                    data-placement="bottom" title="Editar">
                    <i class="fas fa-pencil-alt mt-0"></i>
                  </button>
                  <button type="button" class="btn btn-outline-danger btn-rounded btn-sm px-2" data-toggle="tooltip"
                    data-placement="bottom" title="Eliminar">
                    <i class="fas fa-eraser mt-0"></i>
                  </button>
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
  $('#documentsTable').DataTable({
    "sort":  {1 : "desc"},
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
</script>
@endpush