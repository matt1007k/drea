@extends('layouts.admin')

@section('title', 'Editar álbum')

@section('breadcrumb')
<nav aria-label="breadcrumb" class="mb-5">
  <ol class="breadcrumb bg-white py-2 px-2">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.albumes.index') }}">Lista de álbumes</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar álbum</li>
  </ol>
</nav>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 mx-auto">
      <div class="card">
        <div class="card-body">
          <div class="h3 form-header bg-custom-primary text-white text-center">Editar álbum</div>
          <form action="{{ route('admin.albumes.update', $album) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @include('admin.albums.partials._form', ['btnText' => 'Editar'])
          </form>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection