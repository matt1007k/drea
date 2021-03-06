@extends('layouts.admin')

@section('title', 'Lista de permisos')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_list"></i>
        <span>Lista de permisos</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item active" aria-current="page">Lista de permisos</li>
  </ol>
</div>
@endsection

@section('content')
<div class="mb-4">

  <section>

    {{-- @include('admin.permissions.partials._form-search') --}}
    <div class="mi-card">

      <!-- Card image -->
      <div class="flex justify-between mi-card-content align-center">

        {{-- <div class="mx-3 h4 white-text">Lista de permissions</div> --}}
        @can('permisos.registrar')
        <div>
          <a href="{{ route('admin.permissions.create') }}"
            class="btn btn-success text-uppercase waves-effect waves-light">
            <i class="mr-2 fas fa-plus"></i>
            Registrar permiso
          </a>
        </div>
        @endcan

      </div>
      <!-- /Card image -->

      <div class="px-4">

        <div class="">
          <!-- Table -->
          <table id="permissionsTable" class="table table-responsive table-striped table-bordered table-sm"
            width="100%">

            <!-- Table head -->
            <thead>
              <tr>
                <th class="text-center th-lg font-weight-bold">#</th>
                <th class="text-center th-lg font-weight-bold">Nombre</th>
                <th class="text-center th-lg font-weight-bold">Identificador</th>
                <th class="text-center th-lg font-weight-bold">Descripción</th>
                <th class="text-right th-lg disabled-sorting"></th>
              </tr>
            </thead>
            <!-- Table head -->

            <!-- Table body -->
            <tbody>
              @foreach ($permissions as $permission)
              <tr>
                <td class="text-center font-weight-bold">{{ $permission->id }}</td>
                <td>{{ $permission->name }}</td>
                <td>@include('admin.permissions.partials._slug')</td>
                <td>{{ $permission->description }}</td>
                <td>
                  @can('permisos.ver')
                  <a href="{{ route('admin.permissions.show', $permission) }}" class="px-2 btn btn-light btn-sm"
                    data-balloon-pos="down" aria-label="Ver registro">
                    <i class="mt-0 fas fa-eye"></i>
                  </a>
                  @endcan
                  @can('permisos.editar')
                  <a href="{{ route('admin.permissions.edit', $permission) }}" class="px-2 btn btn-info btn-sm"
                    data-balloon-pos="down" aria-label="Editar registro">
                    <i class="mt-0 fas fa-pencil-alt"></i>
                  </a>
                  @endcan
                  @can('permisos.eliminar')
                  <button type="button" onclick="onDelete({{ $permission->id }})" class="px-2 btn btn-danger btn-sm"
                    data-balloon-pos="down" aria-label="Eliminar registro">
                    <i class="mt-0 fas fa-eraser"></i>
                  </button>
                  <form action="{{ route('admin.permissions.destroy', $permission) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="none" id="btn-delete-{{ $permission->id }}"></button>
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
<script>
  $('#permissionsTable').DataTable({
    "sort":  [[ 3, "asc" ]],
    "searching": true,
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