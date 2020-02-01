@extends('layouts.admin')

@section('title', 'Registrar enlace externo')

@section('breadcrumb')
<nav aria-label="breadcrumb" class="mb-5">
  <ol class="breadcrumb bg-white py-2 px-2">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.external_links.index') }}">Lista de enlace externos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registrar enlace externo</li>
  </ol>
</nav>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card">
        <div class="card-body">
          <div class="h3 form-header bg-custom-primary text-white text-center">Registrar enlace externo</div>
          <form action="{{ route('admin.external_links.store') }}" method="POST" enctype="multipart/form-data">
            @include('admin.external_links.partials._form', ['btnText' => 'Guardar'])
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection