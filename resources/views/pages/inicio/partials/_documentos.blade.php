<div class="documentos">
  <div class="h3">Documentos</div>
  <div class="card mb-2">
    <div class="card-body">
      <div class="h4 text-custom-primary mb-4">Documentos de interés</div>
      <div class="row">
        @foreach ($documentos_interes as $document)
        @include('admin.documents.partials._document', ['document' => $document, 'column_class' =>
        'col-md-6'])
        @endforeach
      </div>

    </div>
    <div class="card-footer">
      <div class="d-flex justify-content-end">
        <a href="{{ url('/documentos') }}" class="btn btn-info btn-sm btn-rounded">Ver mas</a>
      </div>
    </div>
  </div>
  <div class="card mb-2">
    <div class="card-body">
      <div class="h4 text-custom-primary mb-4">Resoluciones</div>
      <div class="row">
        @foreach ($documentos_resoluciones as $document)
        @include('admin.documents.partials._document', ['document' => $document, 'column_class' =>
        'col-md-6'])
        @endforeach
      </div>
      <div class="d-flex justify-content-end">
        <a href="{{ url('/documentos') }}" class="btn btn-info btn-sm btn-rounded">Ver mas</a>
      </div>
    </div>
  </div>
</div>