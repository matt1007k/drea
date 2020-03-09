<div class="documentos">
  @foreach ($tipoDocumentos as $tipo)
  <div>
    <h4 class="font-weight-bold mt-3 text-uppercase"><strong>{{ $tipo->nombre }}</strong></h4>
    <hr class="red title-hr">
    {{-- <div class="h4 text-custom-primary mb-4">{{ $tipo->nombre }}
  </div> --}}
  <div class="row">
    @forelse ($tipo->newestDocuments(4) as $document)
    @include('admin.documents.partials._document', ['document' => $document, 'column_class' =>
    'col-md-12'])
    @empty
    <div class="w-100 bg-white shadow-sm mx-2 px-3 py-4">
      <div class="h3 text-muted">Sin documentos recientes.</div>
    </div>
    @endforelse
  </div>
  <div class="d-flex justify-content-end">
    <a href="{{ url('/documentos') }}"
      class="border border-custom-info boton3 rounded p-2 px-3 d-none d-inline-block waves-effect text-uppercase font-weight-bold">
      Ver más
      <i class="fa fa-arrow-right ml-2"></i>
    </a>
  </div>
</div>
@endforeach
</div>