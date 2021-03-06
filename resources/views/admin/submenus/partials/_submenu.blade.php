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

        @can('submenus.editar')
        <a href="{{ route('admin.menus.submenus.edit', [$menu, $submenu]) }}"
          class="btn btn-info text-uppercase">Editar</a>
        @endcan

      </div>
      <div class="mt-2">
        @can('submenus.eliminar')
        <button type="button" onclick="onDelete({{ $submenu->id }})" class="btn btn-danger text-uppercase">
          Eliminar
        </button>
        <form action="{{ route('admin.menus.submenus.destroy', [$menu, $submenu]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="none" id="btn-delete-{{ $submenu->id }}"></button>
        </form>
        @endcan
      </div>
    </div>
  </div>
  @unless ($submenu->urlExisted())
  <div class="row">
    <div class="col-md-12">
      <div class="mi-card">
        <div class="mi-card-content text-center">
          @if ($submenu->page()->count() > 0)
          @can('paginas.ver')
          <a href="{{ url($submenu->ruta) }}" target="_blank" class="btn btn-primary text-uppercase">
            Ver página
          </a>
          @endcan

          @can('paginas.editar')
          <a href="{{ route('admin.menus.submenus.pages.edit',[$menu, $submenu, $submenu->page]) }}"
            class="btn btn-info text-uppercase">
            Editar página
          </a>
          @endcan
          @can('paginas.eliminar')
          <button onclick="onDeleteSubpage({{$submenu->page->id}})" class="btn btn-danger text-uppercase">
            Eliminar página
          </button>
          <form id="btn-delete-subpage{{ $submenu->page->id }}"
            action="{{ route('admin.menus.submenus.pages.destroy',[$menu, $submenu, $submenu->page]) }}" method="POST">
            @csrf
            @method('DELETE')
          </form>
          @endcan

          @else
          @can('paginas.registrar')
          <a href="{{ route('admin.menus.submenus.pages.create', [$menu, $submenu]) }}"
            class="btn btn-primary text-uppercase">
            Agregar página
          </a>
          @endcan
          @endif
        </div>
      </div>
    </div>
  </div>
  @endunless
</div>