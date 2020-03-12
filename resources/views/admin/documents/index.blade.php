@extends('layouts.admin')

@section('title', 'Lista de documentos')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_list"></i>
        <span>Lista de documentos</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lista de documentos</li>
  </ol>
</div>
@endsection

@section('content')
<div class="mb-4">

  <section>

    @can('admin')
    @include('admin.documents.partials._form-search')
    @endcan
    <div class="mi-card">

      <!-- Card image -->
      <div class="flex justify-between align-center">

        {{-- <div class="mx-3 h4 white-text">Lista de documentos</div> --}}

        @can('documentos.registrar')
        <div class="p-6">
          <a href="{{ route('admin.documents.create') }}" class="btn btn-success text-uppercase waves-effect">
            <i class="mt-0 fas fa-plus"></i>
            Registrar documento
          </a>
        </div>
        @endcan
        @can('documentos.registrar.resolucion')
        <div class="p-6">
          <a href="{{ route('admin.documents.resolucion.create') }}"
            class="btn btn-success text-uppercase waves-effect">
            <i class="mt-0 fas fa-plus"></i>
            Registrar resolución
          </a>
        </div>
        @endcan
      </div>
      <!-- /Card image -->

      <div class="px-4">

        <div class="">
          <!-- Table -->
          <table id="documentsTable" class="table table-responsive table-striped table-bordered table-sm" width="100%">

            <!-- Table head -->
            <thead>
              <tr>
                <th class="text-center th-lg font-weight-bold">#</th>
                <th class="text-center th-lg font-weight-bold">Tipo</th>
                <th class="text-center th-lg font-weight-bold">Titulo</th>
                <th class="text-center th-lg font-weight-bold">Archivo</th>
                <th class="text-center th-lg font-weight-bold">Descripción</th>
                <th class="text-center th-lg font-weight-bold">Fecha de publicación</th>
                <th class="text-center th-lg font-weight-bold">Publicado</th>
                <th class="text-right th-lg disabled-sorting"></th>
              </tr>
            </thead>
            <!-- Table head -->

            <!-- Table body -->
            <tbody>
              @foreach ($documents as $document)
              <tr>
                <td class="text-center font-weight-bold">{{ $document->id }}</td>
                <td>{{ $document->tipo->nombre }}</td>
                <td>{{ $document->titulo }}</td>
                <td class="text-center">
                  <a href="{{ $document->pathFile() }}" target="_blank"><img alt="{{ $document->titulo }}"
                      src="{{ asset('/img/icons/content_download.png') }}" style="width: 45px; height: 45px;"></a>
                </td>
                <td>{{ $document->descripcion }}</td>
                <td>{{ $document->fecha->format('d F, Y') }}</td>
                <td class="text-center">
                  @include('admin.documents.partials._publicado')
                </td>
                <td>
                  @can('documentos.ver')
                  <a href="{{ route('admin.documents.show', $document) }}" class="px-2 btn btn-dark btn-sm"
                    data-balloon-pos="down" aria-label="Ver registro">
                    <i class="mt-0 fas fa-eye"></i>
                  </a>
                  @endcan

                  @can('documentos.editar')
                  <a href="{{ route('admin.documents.edit', $document) }}" class="px-2 btn btn-info btn-sm"
                    data-balloon-pos="down" aria-label="Editar registro">
                    <i class="mt-0 fas fa-pencil-alt"></i>
                  </a>
                  @endcan

                  @can('documentos.editar.resolucion')
                  <a href="{{ route('admin.documents.resolucion.edit', $document) }}" class="px-2 btn btn-info btn-sm"
                    data-balloon-pos="down" aria-label="Editar registro">
                    <i class="mt-0 fas fa-pencil-alt"></i>
                  </a>
                  @endcan

                  @can('documentos.eliminar')
                  <button type="button" onclick="onDelete({{ $document->id }})" class="px-2 btn btn-danger btn-sm"
                    data-balloon-pos="down" aria-label="Eliminar registro">
                    <i class="mt-0 fas fa-eraser"></i>
                  </button>
                  <form action="{{ route('admin.documents.destroy', $document) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="btn-delete-{{ $document->id }}"></button>
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
  $('#documentsTable').DataTable({
    "sort":  [[ 3, "asc" ]],
    @can('resolucion')
    "searching": true,
    @endcan
    @can('admin')
    "searching": false,
    @endcan
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