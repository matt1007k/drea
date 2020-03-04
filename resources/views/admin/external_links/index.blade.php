@extends('layouts.admin')

@section('title', 'Lista de enlaces externos')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_list"></i>
        <span>Lista de enlaces externos</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lista de enlaces externos</li>
  </ol>
</div>
@endsection

@section('content')
<div class="mb-4">

  <section>

    @include('admin.external_links.partials._form-search')
    <div class="mi-card">

      <!-- Card image -->
      <div class="d-flex justify-content-between align-items-center">

        {{-- <div class="mx-3 h4 white-text">Lista de enlaces externos</div> --}}

        <div class="p-6">
          <a href="{{ route('admin.external_links.create') }}"
            class="btn btn-success text-uppercase waves-effect waves-light">
            <i class="mt-0 fas fa-plus"></i>
            Registrar enlace externo
          </a>
        </div>

      </div>
      <!-- /Card image -->

      <div class="px-4">

        <div class="">
          <!-- Table -->
          <table id="external_linksTable" class="table table-responsive table-striped table-bordered table-sm"
            width="100%">

            <!-- Table head -->
            <thead>
              <tr>
                <th class="th-lg text-center font-weight-bold">#</th>
                <th class="th-lg text-center font-weight-bold w-100">Imagen</th>
                <th class="th-lg text-center font-weight-bold">Url</th>
                <th class="th-lg text-center font-weight-bold">Orden</th>
                <th class="th-lg text-center font-weight-bold">Publicado</th>
                <th class="text-right th-lg disabled-sorting"></th>
              </tr>
            </thead>
            <!-- Table head -->

            <!-- Table body -->
            <tbody>
              @foreach ($external_links as $external_link)
              <tr>
                <td class="text-center font-weight-bold">{{ $external_link->id }}</td>
                <td>
                  <img src="{{ $external_link->pathImage() }}" alt="imagen">
                </td>
                <td>{{ $external_link->url }}</td>
                <td class="text-center font-weight-bold">{{ $external_link->orden }}</td>
                <td class="text-center">
                  @include('admin.external_links.partials._publicado')
                </td>
                <td>
                  <a href="{{ route('admin.external_links.show', $external_link) }}" class="px-2 btn btn-light btn-sm"
                    data-balloon-pos="down" aria-label="Ver registro">
                    <i class="mt-0 fas fa-eye"></i>
                  </a>
                  <a href="{{ route('admin.external_links.edit', $external_link) }}" class="px-2 btn btn-info btn-sm"
                    data-balloon-pos="down" aria-label="Editar registro">
                    <i class="mt-0 fas fa-pencil-alt"></i>
                  </a>
                  <button type="button" onclick="onDelete({{ $external_link->id }})" class="px-2 btn btn-danger btn-sm"
                    data-balloon-pos="down" aria-label="Eliminar registro">
                    <i class="mt-0 fas fa-eraser"></i>
                  </button>
                  <form action="{{ route('admin.external_links.destroy', $external_link) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="btn-delete-{{ $external_link->id }}"></button>
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
  $('#external_linksTable').DataTable({
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