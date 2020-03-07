<div class="{{ $column_class }} mb-4">
  <div class="flex justify-between rounded-lg bg-white p-6">
    <div class="content mb-2">
      <div class="font-bold text-3xl text-gray-800">{{ $submenu->titulo }} </div>

      <div class="mb-2">
        <strong>Orden:</strong>{{ $submenu->orden }}
      </div>
      <p class="text-justify mb-2">
        <strong>Ruta:</strong> {{ $submenu->ruta }}
      </p>
    </div>
    <div class="flex flex-col justify-center">
      <div>

        <a href="{{ route('admin.menus.submenus.edit', [$menu, $submenu]) }}"
          class="btn btn-info text-uppercase">Editar</a>

      </div>
      <div class="mt-2">

        <button type="button" onclick="onDelete({{ $submenu->id }})" class="btn btn-danger text-uppercase">
          Eliminar
        </button>
        <form action="{{ route('admin.menus.submenus.destroy', [$menu, $submenu]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="none" id="btn-delete-{{ $submenu->id }}"></button>
        </form>

      </div>
    </div>
  </div>
</div>