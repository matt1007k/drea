<div class="documentos">
  <div class="h3">Últimos documentos</div>
  @foreach ($tipoDocumentos as $tipo)
  <div class="card mb-2">
    <div class="card-body">
      <div class="h4 text-custom-primary mb-4">{{ $tipo->nombre }}</div>
      <div class="row">
        @foreach ($tipo->newestDocuments(2) as $document)
        @include('admin.documents.partials._document', ['document' => $document, 'column_class' =>
        'col-md-6'])
        @endforeach
      </div>

    </div>
    <div class="card-footer">
      <div class="d-flex justify-content-end">
        <a href="{{ url('/documentos') }}" class="btn btn-outline-info btn-sm btn-rounded">Ver mas</a>
      </div>
    </div>
  </div>
  @endforeach
</div>