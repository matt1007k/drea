@extends('layouts.admin')

@section('title', 'Registrar álbum')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_add"></i>
        <span>Registrar álbum</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb bg-white py-2 px-2">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
      <li class="breadcrumb-item"><a href="{{ route('admin.albums.index') }}">Lista de álbumes</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registrar álbum</li>
  </ol>
</div>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 mx-auto">
      <div class="mi-card">
        <div class="mi-card-content">
          {{-- <div class="h3 form-header bg-custom-primary text-white text-center">Registrar álbum</div> --}}
          <form action="{{ route('admin.albums.store') }}" method="POST" enctype="multipart/form-data">
            @include('admin.albums.partials._form', ['btnText' => 'Guardar'])
          </form>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection