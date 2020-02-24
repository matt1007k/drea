@extends('layouts.app')

@section('title', 'Inicio')

@section('description', 'DREA, DREAYAC, DREAYACUCHO, Dirección Regional de Educación de Ayacucho, Dirección Regional de
Educación, Educación')

@section('content')

@include('pages.inicio.partials._landing-slider')

@include('pages.inicio.partials._landing-options')

@include('pages.inicio.partials._container')

@endsection