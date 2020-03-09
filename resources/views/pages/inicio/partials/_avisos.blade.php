<div class="h3 text-uppercase">Comunicados y Avisos</div>
<hr class="red title-hr">
<div id="posts">
  @foreach ($avisos as $aviso)
  @include('admin.posts.partials._aviso')
  @endforeach
</div>
<div class="d-flex justify-content-center">{{ $avisos->links() }}</div>