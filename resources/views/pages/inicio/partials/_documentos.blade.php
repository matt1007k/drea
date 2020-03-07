<div class="documentos">
  @foreach ($tipoDocumentos as $tipo)
  <div>
    <h4 class="font-weight-bold mt-3 text-uppercase"><strong>{{ $tipo->nombre }}</strong></h4>
    <hr class="red title-hr">
    {{-- <div class="h4 text-custom-primary mb-4">{{ $tipo->nombre }}
  </div> --}}
  <div class="row">
    @foreach ($tipo->newestDocuments(4) as $document)
    @include('admin.documents.partials._document', ['document' => $document, 'column_class' =>
    'col-md-12'])
    @endforeach
  </div>

  <div class="d-flex justify-content-end">
    <a href="{{ url('/documentos') }}" class="btn btn-link text-dark">
      Ver más
      <i class="fa fa-arrow-right ml-2"></i>
    </a>
  </div>
</div>
@endforeach
</div>