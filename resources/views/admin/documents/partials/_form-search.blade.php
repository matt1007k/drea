<!-- Top Table UI -->
<div class="card p-2 mb-5">
  <form action="{{ route('admin.documents.index') }}" method="GET">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-3 col-md-12 d-flex align-items-center">

        <!-- Name -->
        <div class="d-block">
          <label for="tipo-doc" class="mb-0 ml-2">Filtrar por tipo</label>
          <select name="tipo"
            class="mdb-select colorful-select dropdown-primary mx-2 mt-0 md-form md-dropdown initialized" id="tipo-doc">
            <option value="todos" @if($tipo=='todos' ) selected @endif>Todos</option>

            @foreach ($tipos as $tipodb)
            <option value="{{$tipodb->nombre}}" @if($tipo==$tipodb->nombre ) selected @endif>{{ $tipodb->nombre }}
            </option>
            @endforeach

          </select>
        </div>
        <a href="{{ route('admin.types.create') }}" class="btn btn-primary btn-rounded btn-sm px-4"
          dusk="btn-create-type" data-toggle="tooltip" data-placement="bottom" title="Registrar tipo de documento">
          <i class="fas fa-plus mt-0"></i>
        </a>

      </div>
      <!-- Grid column -->


      <!-- Grid column -->
      <div class="col-lg col-md-12">

        <div class="d-flex md-form mt-2 ml-2">
          <input class="form-control mt-2" type="text" name="search" placeholder="Buscar"
            value="{{ $search ? $search : old('search') }}">
          <button type="submit" class="btn btn-sm btn-primary ml-2 px-2 waves-effect waves-light"><i
              class="fas fa-search"></i>
          </button>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </form>
</div>
<!-- Top Table UI -->

@push('scripts')
<script>
  $(function(){
    $('#tipo-doc').on('change', function(){
      var tipo = $(this).val();
        window.location.href = '/admin/documentos?tipo='+tipo;
      // $.ajaxSetup({
      //     headers: {
      //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      //     }
      // });
      
      // $.ajax({
      //   'url': '/admin/documents',
      //   type: 'GET',
      //   dataType: 'json',
      //   data: {method: '_DELETE', submit: true}
      // }).always(function(res)){

      // }
    });
  }); 
</script>

@endpush