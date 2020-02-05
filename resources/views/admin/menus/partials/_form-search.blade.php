<!-- Top Table UI -->
<div class="mi-card px-2 py-2 mb-5">
  <form action="{{ route('admin.menus.index') }}" method="GET">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg col-md-12">

        <div class="flex md-form">
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