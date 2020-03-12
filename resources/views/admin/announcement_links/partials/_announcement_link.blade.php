<div class="{{ $column_class }}">

  <div class="rounded-lg bg-white py-5 px-4 mb-2">
    <div class="h5 text-gray-800">{{ $link->titulo }} </div>

    <div class="text-muted mb-3 flex items-center">
      <i class="mi mi-icon_date_range mr-2 text-gray-500"></i>
      {{ $link->fecha->format('d/m/Y') }}
    </div>
    <p class="flex mb-2">
      <strong>Archivo:</strong>
      <span class="ml-2">
        <a href="{{ $link->url }}" target="_blank"><img alt="" src="/storage/uploads/content_dowload.png"
            style="width: 45px; height: 45px;"></a>
      </span>
    </p>
    <div class="mt-4 mb-3 flex justify-between items-center">
      <div>
        @can('cv.enlaces.editar')
        <a href="{{ route('admin.announcements.links.edit', [$announcement, $link]) }}"
          class="btn btn-info text-uppercase">Editar</a>
        @endcan
      </div>
      <div class="h-10">
        @can('cv.enlaces.eliminar')
        <button type="button" onclick="onDelete({{ $link->id }})" class="btn btn-danger text-uppercase">
          Eliminar
        </button>
        <form class="d-none" action="{{ route('admin.announcements.links.destroy', [$announcement, $link]) }}"
          method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="none" id="btn-delete-{{ $link->id }}"></button>
        </form>
        @endcan

      </div>
    </div>
  </div>


</div>