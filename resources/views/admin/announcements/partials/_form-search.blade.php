<!-- Top Table UI -->
<div class="p-2 mb-4 bg-white">
  <form action="{{ route('admin.announcements.index') }}" method="GET">

    <!-- Grid row -->
    <div class="flex flex-wrap md:items-end">

      <!-- Grid column -->
      <div class="flex items-end justify-between w-full md:w-1/4">

        <!-- Name -->
        <div class="w-full">
          <label for="grupo-doc" class="mb-0">Filtrar por grupo</label>
          <select name="grupo" class="form-control" id="grupo-doc">
            <option value="todos" @if($grupo=='todos' ) selected @endif>Todos</option>

            @foreach ($grupos as $grupodb)
            <option value="{{$grupodb->nombre}}" @if($grupo==$grupodb->nombre ) selected @endif>{{ $grupodb->nombre }}
            </option>
            @endforeach

          </select>
        </div>
        {{-- <div>
          <a href="{{ route('admin.n.create') }}" class="rl-2 btn btn-primary btn-sm" dusk="btn-create-type"
        data-balloon-pos="down" aria-label="Registrar grupo de documento">
        <i class="mt-0 fas fa-plus"></i>
        </a>
      </div> --}}

    </div>
    <!-- Grid column -->


    <!-- Grid column -->
    <div class="w-full md:w-3/4">

      <div class="flex ml-2 md-form">
        <input class="form-control" type="text" name="search" placeholder="Buscar"
          value="{{ $search ? $search : old('search') }}">
        <button type="submit" class="ml-2 btn btn-sm btn-primary waves-effect waves-light"><i class="fas fa-search"></i>
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
    $('#grupo-doc').on('change', function(){
      var grupo = $(this).val();
        window.location.href = '/admin/announcements?grupo='+grupo;
    });
  }); 
</script>

@endpush