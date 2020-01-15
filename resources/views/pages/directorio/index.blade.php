@extends('layouts.app')

@section('title', 'Directorio Institucional')

@section('content')
<div class="container mt-4 mb-3">
    <div class="h2 text-center text-custom-primary-dark">Directorio Institucional</div>
    @include('pages.directorio.partials._personal')

    <div class="h3 text-custom-primary mt-3">Nuestro personal</div>
    @include('pages.directorio.partials._dr-table')
    @include('pages.directorio.partials._dgp-table')
    @include('pages.directorio.partials._dgi-table')
    @include('pages.directorio.partials._oci-table')
    @include('pages.directorio.partials._oaj-table')
    @include('pages.directorio.partials._oa-table')
    @include('pages.directorio.partials._aper-table')
</div>
@endsection