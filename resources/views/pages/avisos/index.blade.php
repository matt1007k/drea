@extends('layouts.app')

@section('title', 'Informate con avisos, noticias y comunicados oficiales.')

@section('content')
<div class="container">
  <div class="row mt-3">
    <div class="col-md">
      @include('pages.inicio.partials._avisos')
    </div>
  </div>
</div>

@endsection