<!-- Sidebar navigation -->
<div id="slide-out" class="fixed side-nav sn-bg-4">
  <ul class="custom-scrollbar">

    <!-- Logo -->
    <li class="py-2 logo-sn waves-effect bg-custom-primary-dark">
      <div class="text-center">
        <a href="#" class="pl-0">
          <img height="50px" class="mr-1" src="{{ asset('img/drea/logo.png') }}" alt="Logo DREA">
          <span class="text-white h5 font-weight-bold">
            Administración
          </span>
        </a>
      </div>
    </li>



    <!-- Side navigation links -->
    <li>
      <ul class="collapsible collapsible-accordion">

        <li>
          <a href="{{ route('admin.index') }}"
            class="collapsible-header waves-effect  @if(request()->is('admin')) active @endif">
            <i class="w-fa fas fa-tachometer-alt"></i>Tablero de resumen
          </a>
        </li>

        <li class="@if(request()->is('admin/avisos*')) active @endif">
          <a class="collapsible-header waves-effect arrow-r @if(request()->is('admin/avisos*')) active @endif">
            <i class="w-fa fas fa-list"></i>Avisos<i class="fas fa-angle-down rotate-icon"></i>
          </a>
          <div class="collapsible-body">
            <ul>
              <li>
                <a href="{{ route('admin.posts.index') }}" class="waves-effect @if(request()->is('admin/avisos')) active @endif
                  ">Lista de avisos</a>
              </li>
              <li>
                <a href="{{ route('admin.posts.create') }}" class="waves-effect @if(request()->is('admin/avisos/create')) active @endif
                  ">Registrar un articulo</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="@if(request()->is('admin/menus*')) active @endif">
          <a class="collapsible-header waves-effect arrow-r @if(request()->is('admin/menus*')) active @endif">
            <i class="w-fa fas fa-bars"></i>Menus<i class="fas fa-angle-down rotate-icon"></i>
          </a>
          <div class="collapsible-body">
            <ul>
              <li>
                <a href="{{ route('admin.menus.index') }}" class="waves-effect @if(request()->is('admin/menus')) active @endif
                  ">Lista de menús</a>
              </li>
              <li>
                <a href="{{ route('admin.menus.create') }}" class="waves-effect @if(request()->is('admin/menus/create')) active @endif
                  ">Registrar un menú</a>
              </li>
            </ul>
          </div>
        </li>

        <li class="@if(request()->is('admin/documents*')) active @endif">
          <a class="collapsible-header waves-effect arrow-r @if(request()->is('admin/documents*')) active @endif">
            <i class="w-fa fas fa-copy"></i>Documentos<i class="fas fa-angle-down rotate-icon"></i>
          </a>
          <div class="collapsible-body">
            <ul>
              <li>
                <a href="{{ route('admin.documents.index') }}" class="waves-effect @if(request()->is('admin/documents')) active @endif
                  ">Lista de documentos</a>
              </li>
              <li>
                <a href="{{ route('admin.documents.create') }}" class="waves-effect @if(request()->is('admin/documents/create')) active @endif
                  ">Registrar un documento</a>
              </li>
            </ul>
          </div>
        </li>

        <!-- Simple link -->
        {{-- <li>
          <a href="../alerts/alerts.html" class="collapsible-header waves-effect"><i
              class="w-fa far fa-bell"></i>Alerts</a>
        </li> --}}

      </ul>
    </li>
    <!-- Side navigation links -->

  </ul>
  <div class="sidenav-bg mask-strong"></div>
</div>
<!-- Sidebar navigation -->