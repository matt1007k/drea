@extends('layouts.admin')

@section('title', 'Lista de avisos')

@section('content-header')
<div class="my-4 mx-8 flex items-end justify-between">
  <div>
    <div class="flex items-center text-lg text-gray-500">
      <a href="{{ route('admin.index') }}" class="mr-2 hover:text-gray-600">
        <i class="eva eva-arrow-back-outline"></i>
      </a>
      <span class="font-rubik font-medium">Tablero de resumen</span>
    </div>
    <div class="heading-1">
      <span>Avisos</span>
    </div>
  </div>
  <div>        
    @can('avisos.registrar')
    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
      <i class="eva eva-plus-outline left"></i>
      Nuevo aviso
    </a>
    @endcan
  </div>
</div>
@endsection

@section('content')
<div class="my-6 mx-8 bg-white rounded-lg shadow-lg">
      <div class="p-6">
    @include('admin.posts.partials._form-search')

          <!-- Table -->
          <table id="postsTable" class="w-full h-full overflow-scroll">

            <!-- Table head -->
            <thead>
              <tr class="bg-teal-200 text-sm">
                <th class="text-left uppercase font-medium text-teal-500 py-3 px-3">#</th>
                <th class="text-left uppercase font-medium text-teal-500 py-3 px-3">Titulo</th>
                <th class="text-left uppercase font-medium text-teal-500 py-3 px-3">Fecha</th>
                <th class="text-left uppercase font-medium text-teal-500 py-3 px-3">Publicado</th>
                <th class="text-left uppercase font-medium text-teal-500 py-3 px-3">Acciones</th>
              </tr>
            </thead>
            <!-- Table head -->

            <!-- Table body -->
            <tbody class="max-h-1/2 overflow-scroll">
              @foreach ($posts as $post)
              <tr class="border h-12">
                <td class="font-bold text-center text-sm px-4">{{ $post->id }}</td>
                <td class="text-sm px-4 py-2 w-2/3">{{ $post->titulo }}</td>
                <td class="text-sm px-4 py-2 text-gray-700 w-full ">
                  <i class="eva eva-calendar-outline pt-2 pr-1"></i>
                  {{ $post->fecha_format }}
                </td>
                <td class="text-sm px-4 text-center">@include('admin.posts.partials._publicado')</td>
                <td class="px-4 py-3 flex items-center justify-center">
                  @can('avisos.ver')
                  <a href="{{ route('admin.posts.show', $post) }}" class="px-2 link-action"
                    data-balloon-pos="down" aria-label="Ver registro">
                    <i class="mt-0 eva eva-eye-outline"></i>
                  </a>
                  @endcan
                  @can('avisos.editar')
                  <a href="{{ route('admin.posts.edit', $post) }}" class="px-2 link-action"
                    data-balloon-pos="down" aria-label="Editar registro">
                    <i class="mt-0 eva eva-edit-2-outline"></i>
                  </a>
                  @endcan
                  @can('avisos.eliminar')
                  <button type="button" onclick="onDelete({{ $post->id }})" class="px-2 link-action"
                    data-balloon-pos="down" aria-label="Eliminar registro">
                    <i class="mt-0 eva eva-trash-2-outline"></i>
                  </button>
                  <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="none" id="btn-delete-{{ $post->id }}"></button>
                  </form>
                  @endcan
                </td>
              </tr>
              @endforeach

            </tbody>
            <!-- Table body -->
          </table>
          <!-- Table -->


      </div>
      <div class="p-6 flex items-center justify-between">
        {{ $posts->links('vendor.pagination.tailwind') }}
      </div>
</div>
@endsection

@push('scripts')
<script>
  function onDelete(id) {
      swal({
          title: 'Estás seguro de eliminar el registro?',
          type: 'warning',
          showCloseButton: true,
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          focusConfirm: false,
          confirmButtonText: '<i class="fa fa-check"></i> Si, eliminar',
          cancelButtonText: '<i class="fa fa-ban"></i> Cancelar',
      }).then((result) => {
          if (result.value) {
              $("#btn-delete-"+ id).click();

          }
      })
  }
</script>
@endpush