@extends('layouts.admin')

@section('title', 'Detalle de documento')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-card m-b-0">
    <div class="mi-card-header bg-green">
      <div class="mi-title">
        <i class="mi mi-icon_remove_red_eye"></i>
        <span>Detalle del documento</span>
      </div>
    </div>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Tablero de resumen</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.documents.index') }}">Lista de documentos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detalle del documento</li>
  </ol>
</div>
@endsection


@section('content')
<div class="container">
  <div class="row rounded-lg bg-white px-8">
    <div class="h4 text-blue-800">{{ $document->tipo->nombre }}</div>
    @include('admin.documents.partials._document', ['column_class' => 'col-md-12'])
    <a href="{{ route('admin.documents.index')}}" class="btn btn-link">
      <i class="fa fa-arrow-left"></i>
      Regresar
    </a>
  </div>
</div>

@endsection