@extends('layouts.admin')

@section('title', 'Editar grupo de convocatoria')

@section('breadcrumb')
<nav aria-label="breadcrumb" class="mb-5">
  <ol class="breadcrumb bg-white py-2 px-2">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.announcement_groups.index') }}">Lista de grupo de
        convocatorias</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar grupo de convocatoria</li>
  </ol>
</nav>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 mx-auto">
      <div class="card">
        <div class="card-body">
          <div class="h3 form-header bg-custom-primary text-white text-center">Editar grupo de convocatoria</div>
          <form action="{{ route('admin.announcement_groups.update', $announcement_group) }}" method="POST">
            @method('PUT')
            @include('admin.announcement_groups.partials._form', ['btnText' => 'Editar'])
          </form>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection