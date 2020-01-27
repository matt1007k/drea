@extends('layouts.admin')

@section('title', 'Detalle de documento')

@section('breadcrumb')
<nav aria-label="breadcrumb" class="mb-5">
  <ol class="px-2 py-2 bg-white breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.documents.index') }}">Lista de documentos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalle del documento</li>
  </ol>
</nav>
@endsection


@section('content')
<div class="container">
  <div class="row">
        <h4>{{ $document->tipo->nombre }}</h4>
    <div class="card">
      <div class="card-body">
      @include('admin.documents.partials._document', ['column_class' => 'col-md-12'])
      </div>
    </div>
    <a href="{{ route('admin.documents.index')}}" class="btn btn-link">
      <i class="fa fa-arrow-left"></i>
      Regresar
    </a>
  </div>
</div>

@endsection
