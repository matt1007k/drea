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
<div class="container-fluid">
  <section>

    <!-- Top Table UI -->
    <div class="card p-2 mb-5">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-3 col-md-12">

          <!-- Name -->
          <div>
            <select class="mdb-select colorful-select dropdown-primary mx-2 md-form mt-3 md-dropdown initialized">
              <option value="" disabled="" selected="">Bulk actions</option>
              <option value="1">Delate</option>
              <option value="2">Export</option>
              <option value="3">Change segment</option>
            </select>
          </div>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-3 col-md-6">

          <!-- Blue select -->
          <div>
            <select class="mdb-select colorful-select dropdown-primary mx-2 md-form mt-3 md-dropdown initialized">
              <option value="" disabled="" selected="">Show only</option>
              <option value="1">All (2000)</option>
              <option value="2">Never opened (200)</option>
              <option value="3">Opened but unanswered (1800)</option>
              <option value="4">Answered (200)</option>
              <option value="5">Unsunscribed (50)</option>
            </select>
          </div>
          <!-- /Blue select -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-3 col-md-6">

          <!-- Blue select -->
          <div>
            <select class="mdb-select colorful-select dropdown-primary mx-2 md-form mt-3 md-dropdown initialized">
              <option value="" disabled="" selected="">Filter segments</option>
              <option value="1">Contacts in no segments (100)</option>
              <option value="1">Segment 1 (2000)</option>
              <option value="2">Segment 2 (1000)</option>
              <option value="3">Segment 3 (4000)</option>
            </select>
          </div>
          <!-- /Blue select -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-3 col-md-6">

          <form class="form-inline md-form mt-2 ml-2">
            <input class="form-control mt-2" type="text" placeholder="Search" style="max-width: 150px;">
            <button class="btn btn-sm btn-primary ml-2 px-1 waves-effect waves-light"><i class="fas fa-search"></i>
            </button>
          </form>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Top Table UI -->

    <div class="card card-cascade narrower z-depth-1">

      <!-- Card image -->
      <div
        class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

        <div class="h4 white-text mx-3">Lista de documentos</div>

        <div>
          <a href="{{ route('admin.documents.create') }}"
            class="btn btn-outline-white btn-rounded btn-sm px-2 waves-effect waves-light" data-toggle="tooltip"
            data-placement="bottom" title="Registrar documento">
            <i class="fas fa-info-circle mt-0"></i>
          </a>
        </div>

      </div>
      <!-- /Card image -->

      <div class="px-4">

        <div class="table-responsive">
          <!-- Table -->
          <table id="dtOrderExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

            <!-- Table head -->
            <thead>
              <tr>
                <th class="th-lg">#</th>
                <th class="th-lg">Titulo</th>
                <th class="th-lg">Url</th>
                <th class="th-lg">Descripción</th>
                <th class="th-lg"></th>
              </tr>
            </thead>
            <!-- Table head -->

            <!-- Table body -->
            <tbody>
              @foreach ($documents as $document)
              <tr>
                <td>{{ $document->id }}</td>
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
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endpush

@push('scripts')
<script src="{{ asset('/js/datatables.min.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
{{-- <script src="{{ asset('/js/datatables-select.min.js') }}"></script> --}}
<script>
  $(document).ready(function () {
    $('#dtOrderExample').DataTable({
    "order": [[ 1, "desc" ]],
    select: true
    });
    $('.dataTables_length').addClass('bs-select');
    });
</script>
@endpush