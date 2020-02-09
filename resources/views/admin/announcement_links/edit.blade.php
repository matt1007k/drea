@extends('layouts.admin')

@section('title', 'Editar enlace de convocatoria N°'. $announcement->numero)

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_edit"></i>
        <span>Editar enlace de convocatoria N° {{ $announcement->numero }}</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.announcements.index') }}">Lista de convocatorias</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.announcements.show', $announcement) }}">Detalle de la
        convocatorias N° {{ $announcement->numero }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar enlace de convocatoria N°
      {{ $announcement->numero }}</li>
  </ol>
</div>
@endsection

@section('content')
<div class="container">
  <div class="row flex justify-center">
    <div class="col-md-7">
      <div class="mi-card">
        <div class="mi-card-content">
          <form action="{{ route('admin.announcements.links.update', [$announcement, $link]) }}" method="POST">
            @method('PUT')
            @include('admin.announcement_links.partials._form', ['btnText' => 'Editar'])
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection