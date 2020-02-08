<!-- Top Table UI -->
<div class="card p-2 mb-5">
  <form action="{{ route('admin.photos.index') }}" method="GET">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-3 col-md-12 d-flex align-items-center">

        <!-- Name -->
        <div class="d-block">
          <label for="album-doc" class="mb-0 ml-2">Filtrar por álbum</label>
          <select name="album"
            class="mdb-select colorful-select dropdown-primary mx-2 mt-0 md-form md-dropdown initialized"
            id="album-doc">
            <option value="todos" @if($album=='todos' ) selected @endif>Todos</option>

            @foreach ($albums as $albumdb)
            <option value="{{$albumdb->titulo}}" @if($album==$albumdb->titulo ) selected @endif>{{ $albumdb->titulo }}
            </option>
            @endforeach

          </select>
        </div>
        <a href="{{ route('admin.albums.index') }}" class="btn btn-primary btn-rounded btn-sm px-4"
          dusk="btn-list-album" data-toggle="tooltip" data-placement="bottom" title="Lista de álbumes">
          <i class="fas fa-plus mt-0"></i>
        </a>

      </div>
      <!-- Grid column -->


      <!-- Grid column -->
      <div class="col-lg col-md-12">

        <div class="d-flex md-form mt-2 ml-2">
          <input class="form-control" type="text" name="search" placeholder="Buscar"
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
    $('#album-doc').on('change', function(){
      var album = $(this).val();
        window.location.href = '/admin/photos?album='+album;
    });
  });
</script>
@endpush