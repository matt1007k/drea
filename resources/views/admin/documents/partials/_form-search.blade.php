<!-- Top Table UI -->
<div class="bg-white p-2 mb-4">
  <form action="{{ route('admin.documents.index') }}" method="GET">

    <!-- Grid row -->
    <div class="flex flex-wrap md:items-end">

      <!-- Grid column -->
      <div class="flex items-end justify-between w-full md:w-1/4">

        <!-- Name -->
        <div class="block">
          <label for="tipo-doc" class="mb-0">Filtrar por tipo</label>
          <select name="tipo" class="form-control w-full" id="tipo-doc">
            <option value="todos" @if($tipo=='todos' ) selected @endif>Todos</option>

            @foreach ($tipos as $tipodb)
            <option value="{{$tipodb->nombre}}" @if($tipo==$tipodb->nombre ) selected @endif>{{ $tipodb->nombre }}
            </option>
            @endforeach

          </select>
        </div>
        <div>
          <a href="{{ route('admin.types.create') }}" class="rl-2 btn btn-primary btn-sm" dusk="btn-create-type"
            data-toggle="tooltip" data-placement="bottom" title="Registrar tipo de documento">
            <i class="fas fa-plus mt-0"></i>
          </a>
        </div>

      </div>
      <!-- Grid column -->


      <!-- Grid column -->
      <div class="w-full md:w-3/4">

        <div class="flex md-form ml-2">
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
        window.location.href = '/admin/documents?tipo='+tipo;
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