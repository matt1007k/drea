<div class="h3">Comunicados y Avisos</div>
<div id="posts">
  @foreach ($avisos as $aviso)
  @include('admin.posts.partials._aviso')
  @endforeach
</div>
<div class="d-flex justify-content-center">{{ $avisos->links() }}</div>