@extends('layouts.admin')

@section('title', 'Registrar aviso')

@section('content-header')
<div class="my-4 mx-8 flex items-end justify-between">
  <div>
    <div class="flex items-center text-lg text-gray-500">
      <a href="{{ route('admin.posts.index') }}" class="mr-2 hover:text-gray-600">
        <i class="eva eva-arrow-back-outline"></i>
      </a>
      <span class="font-rubik font-medium">Avisos</span>
    </div>
    <div class="heading-1">
      <span>Crear aviso</span>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="mx-8 my-4">
  <div class="flex items-start">
    <div class="w-full md:w-2/3 mr-0 md:mr-4">
      <div class="bg-white p-6 shadow-md rounded-lg">
          <form action="{{ route('admin.posts.store') }}" method="POST">
            @include('admin.posts.partials._form', ['btnText' => 'Guardar'])
          </form>
      </div>
    </div>
    <div class="bg-white p-6 shadow-md rounded-lg w-full md:w-1/3">
      <h3 class="heading-3">Crear nuevo aviso</h3>
    </div>
  </div>

</div>

@endsection