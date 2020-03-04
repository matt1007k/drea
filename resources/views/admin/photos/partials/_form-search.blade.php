<!-- Top Table UI -->
<div class="p-2 mb-4 bg-white">
  <form action="{{ route('admin.photos.index') }}" method="GET">

    <!-- Grid row -->
    <div class="flex flex-wrap md:items-end">

      <!-- Grid column -->
      <div class="flex items-end justify-between w-full md:w-1/4">

        <!-- Name -->
        <div class="w-full block">
          <label for="album-doc" class="mb-0">Filtrar por álbum</label>
          <select name="album" class="w-full form-control" id="album-doc">
            <option value="todos" @if($album=='todos' ) selected @endif>Todos</option>

            @foreach ($albums as $albumdb)
            <option value="{{$albumdb->titulo}}" @if($album==$albumdb->titulo ) selected @endif>{{ $albumdb->titulo }}
            </option>
            @endforeach

          </select>
        </div>
        <div class="ml-2">
          <a href="{{ route('admin.types.create') }}" class="rl-2 btn btn-primary btn-sm" dusk="btn-create-type"
            data-balloon-pos="down" aria-label="Lista de álbumes">
            <i class="mt-0 fas fa-list"></i>
          </a>
        </div>

      </div>
      <!-- Grid column -->


      <!-- Grid column -->
      <div class="w-full md:w-3/4">

        <div class="flex ml-2 md-form">
          <input class="form-control" type="text" name="search" placeholder="Buscar"
            value="{{ $search ? $search : old('search') }}">
          <button type="submit" class="px-2 ml-2 btn btn-sm btn-primary waves-effect waves-light"><i
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
    $('#album-doc').on('change', function(){
      var album = $(this).val();
        window.location.href = '/admin/photos?album='+album;
    });
  });
</script>
@endpush