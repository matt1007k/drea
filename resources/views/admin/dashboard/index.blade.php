@extends('layouts.admin')

@section('title', 'Tablero de resumen')

@section('content-header')
<div class="my-4 mx-8">
  <div class="heading-1">
    <span>Tablero de resumen</span>
  </div>
</div>
@endsection

@section('content')

<div class="mt-6 mb-4 mx-8 grid grid-cols-4 gap-8">
  <div class="card bg-white p-6 rounded-lg bg-linear-auth shadow-md">
      <div class="">
        <i class="eva eva-message-circle eva-2x text-white"></i>
      </div>
    <div class="flex items-end justify-between">
      <div>
        <div class="text-gray-400 mb-0 mt-3 font-medium font-rubik">Avisos</div>
        <div class="font-bold text-white text-2xl">217</div>
      </div>
      <div>
        <a href="#" class="text-blue-700 font-medium text-sm hover:underline">Ver Todo</a>
      </div>
    </div>
  </div>
  <!---->
  <div class="card bg-white p-6 rounded-lg shadow-md">
    <div class="mi-card-visual bg-red zoomIn">
      <div class="mi-visual-bar">
        <i class="mi mi-icon_group_add"></i>
      </div>
      <div class="mi-visual-content">
        <div class="mi-visual-title">New Users</div>
        <div class="mi-visual-data">742</div>
      </div>
    </div>
  </div>
  <!---->
  <div class="card bg-white p-6 rounded-lg bg-linear-sidebar shadow-md">
    <div class="mi-card-visual bg-orange zoomIn">
      <div class="mi-visual-bar">
        <i class="mi mi-icon_shopping_cart"></i>
      </div>
      <div class="mi-visual-content">
        <div class="mi-visual-title">New Orders</div>
        <div class="mi-visual-data">954</div>
      </div>
    </div>
  </div>
  <!---->
  <div class="card bg-red-200 p-6 rounded-lg shadow-md">
    <div class="flex flex-col">
      <div class="bg-red-300 py-2 px-3 h-12 w-12 flex items-center justify-center rounded-full">
        <i class="eva eva-radio eva-2x text-red-500"></i>
      </div>
      <div class="mt-4">
        <div class="text-red-500 font-medium font-rubik">Anuncios</div>
        <div class="text-red-600 text-2xl font-bold">3540</div>
      </div>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- Stats -->
<!-- ============================================================== -->
</div>
@endsection