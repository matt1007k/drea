@extends('layouts.app')

@section('title', "{$page->titulo}")

@section('description', "{$page->descripcion}")

@section('content')
<div class="container my-3">
  <div class="card">
    <div class="card-body">
      {!! $page->contenido !!}

    </div>
  </div>
</div>
@endsection