<!-- Top Table UI -->
<div class="mb-4">
  <form action="{{ route('admin.posts.index') }}" method="GET">

        <div class="flex w-1/2">
          <input class="form-control rounded-r-none" type="text" name="search" placeholder="¿Qué estas buscando...?"
            value="{{ $search ? $search : old('search') }}">
          <button type="submit" class="btn btn-dark rounded-l-none px-8 py-2">Buscar
          </button>
        </div>

  </form>
</div>
<!-- Top Table UI -->