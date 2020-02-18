@extends('layouts.admin')

@section('title', 'Editar submenú de '. $menu->titulo)

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_list"></i>
        <span>Editar submenú</span>
        <span>de "{{ $menu->titulo }}"</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.menus.show', $menu) }}">Detalle del menú
        <span>"{{ $menu->titulo }}"</span></a></li>
    <li class="breadcrumb-item active" aria-current="page">Editar submenú</li>
  </ol>
</div>
@endsection

@section('content')
<div class="container">
  <div class="row flex justify-center">
    <div class="col-md-6">
      <div class="mi-card">
        <div class="mi-card-content">
          <form action="{{ route('admin.menus.submenus.update', [$menu, $submenu]) }}" method="POST">
            @method('PUT')
            @include('admin.submenus.partials._form', ['btnText' => 'Editar'])
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection