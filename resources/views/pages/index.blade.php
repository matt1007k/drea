@extends('layouts.app')

@section('title', "{$menu->page->titulo}")

@section('content')
<div class="container my-3">
  <div class="card">
    <div class="card-body">
      {!! $menu->page->contenido !!}

    </div>
  </div>
</div>
@endsection