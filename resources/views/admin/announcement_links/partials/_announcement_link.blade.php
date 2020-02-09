<div class="{{ $column_class }} mb-4">

  <div class="content mb-2">
    <div class="h5 text-gray-800">{{ $link->titulo }} </div>

    <div class="text-muted mb-2">
      {{ $link->fecha->format('d/m/yy') }}
    </div>
    <p class="text-justify mb-2">
      <strong>Url:</strong> {{ $link->url }}
    </p>
  </div>
  <div class="mt-3 flex justify-between">
    <div>

      <a href="{{ route('admin.announcements.links.edit', [$announcement, $link]) }}"
        class="btn btn-info text-uppercase">Editar</a>

    </div>
    <div>

      <button type="button" onclick="onDelete({{ $link->id }})" class="btn btn-danger text-uppercase">
        Eliminar
      </button>
      <form action="{{ route('admin.announcements.links.destroy', [$announcement, $link]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="none" id="btn-delete-{{ $link->id }}"></button>
      </form>

    </div>
  </div>

</div>