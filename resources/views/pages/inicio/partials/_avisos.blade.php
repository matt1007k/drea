<div class="h3">Comunicados y Avisos</div>
@foreach ($avisos as $aviso)
@include('admin.posts.partials._aviso')
@endforeach
<div class="d-flex justify-content-center">{{ $avisos->links() }}</div>