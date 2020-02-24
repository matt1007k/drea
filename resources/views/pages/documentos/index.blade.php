@extends('layouts.app')

@section('title', 'Buscar y consulta los documentos oficiales subidos por la DREA')

@section('description', 'Buscar y consulta los documentos oficiales subidos por la DREA')

@section('content')
<div class="container">
  <div class="row">
    <div class="px-3 py-4 bg-white col-md">
      @if(isset($search) || isset($q) || isset($d))
      <div class="h5 text-muted mb-4">Resultados encontrados ({{$documents->count()}})</div>
      @endif

      @forelse ($documents as $document)
      @include('admin.documents.partials._document', ['column_class' => 'col-md-12'])
      @empty
      <div class="text-center ">
        <div class="display-4 font-weight-bold">
          Sin resultados...
        </div>
        <div>
          Lo sentimos. Intente con otra palabra que no sea
          <span class="font-weight-bold">
            ({{ $search ?? $search }}
            {{ $q ?? $q }}
            {{ $d ?? $d }} )
          </span>,
          para encontrar lo que busca.
        </div>
      </div>
      @endforelse
      <div class="d-flex justify-content-center">
        {{ $documents->links() }}
      </div>
    </div>

    <div class="col-md-4">
      <form action="{{ route('pages.documentos.index') }}" method="GET">
        <div class="mt-4 mb-4 form-group d-flex">
          <input type="text" name="search" placeholder="Que documento estás buscando..."
            value="{{ old('search', $search) }}" class="form-control" />

          <button class="m-0 btn btn-primary btn-sm" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </form>


      <div>
        <div class="mb-3 h4 text-custom-primary-dark">
          Categorías
        </div>
        <ul class="list-unstyled">
          @foreach ($tipos as $tipo)
          <li class="px-3 py-2 cursor-pointer d-flex justify-content-between">

            <a href="{{ url('/documentos?q='.$tipo->nombre) }}"
              class="font-weight-bold @if($q == $tipo->nombre) text-custom-primary @else text-dark @endif">{{ $tipo->nombre }}</a>
            <span class="text-muted">({{ $tipo->documentos->count() }})</span>
          </li>
          @endforeach
        </ul>
      </div>

      <div class="my-4 ">
        <div class="mb-3 h4 text-custom-primary-dark">
          Por Fecha
        </div>
        <div>
          <input type="date" class="form-control w-100" id="filterDate">
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@push('styles')
<link href="{{ asset('vendors/kendo-ui-core/kendo.common-material.min.css') }}" rel="stylesheet" />
<link href="{{ asset('vendors/kendo-ui-core/kendo.material.min.css') }}" rel="stylesheet" />
@endpush
@push('scripts')
<script src="{{ asset('vendors/kendo-ui-core/kendo.ui.core.min.js') }}"></script>
<script src="https://kendo.cdn.telerik.com/2019.2.514/js/cultures/kendo.culture.es-ES.min.js"></script>
<script>
  $(document).ready(function() {
    
    // var filter = document.querySelector('#filterDate');
    function onChange(){
      // var dateSelect = this.value();
      var date = this._oldText;
      window.location.href = "/documentos?d="+ date;
    };
      // Data Picker Initialization
    $('#filterDate').kendoDatePicker({
      culture: "es-ES",
      format: "dd-MM-yyyy",
      value: new Date(
        {{ $d ? explode('-',  $d)[2] : date('Y') }},
        {{ $d ? explode('-', $d ?? $d)[1] - 1 : date('m') }}, 
        {{ $d ? explode('-', $d ?? $d)[0] : date('d') }}, 
        0, 0, 0),
      min: new Date(2010, 1, 1, 8, 0, 0),
      max: new Date(),
      change: onChange
    });
  })
  

</script>
@endpush