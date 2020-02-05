@extends('layouts.app')

@section('title', 'Detalle de aviso')

@section('content')
<div class="container">
  <div class="row mt-2 mb-3">
    <div class="col-md">
      @include('admin.posts.partials._aviso')
      <div class="card border-top-0">
        <div class="card-body">

          <div>
            <p class="font-weight-bold text-center">¡Comparte está publicación con tus amigos!</p>
            <div class="sharethis-inline-share-buttons"></div>
          </div>


          <div class="mt-3">
            <div class="h5">Comentarios</div>
            <div id="fb-root"></div>
            <div class="fb-comments" data-href="{{ route('pages.avisos.show', $aviso) }}" data-width="100%"
              data-order-by="reverse_time"></div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@push('scripts')
<script type='text/javascript'
  src='https://platform-api.sharethis.com/js/sharethis.js#property=5e2e51e946b8180012d48a3f&product=inline-share-buttons&cms=sop'
  async='async'></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v5.0">
</script>
@endpush