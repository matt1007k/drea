<!-- ============================================================== -->
<!-- #Begin# Sidebar -->
<!-- ============================================================== -->
<aside class="mi-sidebar">
  <!-- ============================================================== -->
  <!-- Logo -->
  <!-- ============================================================== -->
  <a href="{{ route('admin.index') }}" class="media mi-logo waves-effect">
    <div class="flex items-center">
      <img src="{{ asset('img/drea/logo.png') }}" width="50" alt="Logo DREA">
      <div class="mi-logo-text">Administración</div>
    </div>
  </a>
  <!-- ============================================================== -->
  <!-- #Begin# Menu -->
  <!-- ============================================================== -->
  <div class="mi-menu">
    <div class="mi-card-user bg-cyan hidden">
      <div class="mi-card-user-name">john</div>
      <div class="mi-card-user-surname">Brav</div>
      <div class="image">
        <img src=".img/logo.png" width="48" height="48" />
      </div>
      <div class="mi-profile-content waves-effect" data-toggle="collapse" data-target="#mi_menu_user_list">
        <div class="name">John Brav</div>
        <div class="email">johnbrav@example.com</div>
        <a class="mi-profile-menu"></a>
      </div>
    </div>
    <div class="collapse" id="mi_menu_user_list">
      <div class="mi-menu-list">

        <a href="snippets/profile.html" class="list-group-item waves-effect">
          <i class="mi mi-icon_create col-orange"></i>
          <span>Profile Edit</span>
        </a>

        <a href="snippets/profile.html" class="list-group-item waves-effect">
          <i class="mi mi-icon_settings col-blue-grey"></i>
          <span>Settings</span>
        </a>
        <hr>
        <a href="snippets/login.html" class="list-group-item waves-effect m-t--5">
          <i class="mi mi-icon_power_settings_new col-pink"></i>
          <span>Logout</span>
        </a>
      </div>
    </div>
    <ul class="mi-menu-nav">
      <li class="header">MANTENIMIENTO</li>
      <li class="{{ request()->is('admin') ? 'active' : '' }}" data-mi-color="col-blue">
        <a href="{{ route('admin.index') }}">
          <i class="mi mi-icon_dashboard"></i>
          <span>Tablero de resumen</span>
        </a>
      </li>

      <li class="mi-menu-toggle @if(request()->is('admin/avisos*')) active @endif" data-mi-color="col-cyan">
        <a href="javascript:void(0);">
          <i class="mi mi-icon_layers"></i>
          <span>Avisos</span>
        </a>
        <ul class="mi-menu-sub">
          <li class="{{ request()->is('admin/avisos') ? 'active' : '' }}">
            <a href="{{ route('admin.posts.index') }}">Lista de avisos</a>
          </li>
          <li class="{{ request()->is('admin/avisos/create') ? 'active' : '' }}">
            <a href="{{ route('admin.posts.create') }}">Registrar aviso</a>
          </li>
        </ul>
      </li>
      <li class="mi-menu-toggle @if(request()->is('admin/menus*')) active @endif" data-mi-color="col-red">
        <a href="javascript:void(0);">
          <i class="mi mi-icon_border_left"></i>
          <span>Menús</span>
        </a>
        <ul class="mi-menu-sub">
          <li class="{{ request()->is('admin/menus') ? 'active' : '' }}">
            <a href="{{ route('admin.menus.index') }}">Lista de menús</a>
          </li>
          <li class="{{ request()->is('admin/menus/create') ? 'active' : '' }}">
            <a href="{{ route('admin.menus.create') }}">Registrar menú</a>
          </li>
        </ul>
      </li>
      <li class="mi-menu-toggle" data-mi-color="col-teal">
        <a href="javascript:void(0);">
          <i class="mi mi-icon_insert_drive_file"></i>
          <span>Documentos</span>
        </a>
        <ul class="mi-menu-sub">
          <li class="{{ request()->is('admin/documents') ? 'active' : '' }}">
            <a href="{{ route('admin.documents.index') }}">Lista de documentos</a>
          </li>
          <li class="{{ request()->is('admin/documents') ? 'active' : '' }}">
            <a href="{{ route('admin.documents.create') }}">Registrar documento</a>
          </li>
        </ul>
      </li>
      <li class="mi-menu-toggle" data-mi-color="col-teal">
        <a href="javascript:void(0);">
          <i class="mi mi-icon_speaker_notes"></i>
          <span>Anuncios</span>
        </a>
        <ul class="mi-menu-sub">
          <li class="{{ request()->is('admin/ads') ? 'active' : '' }}">
            <a href="{{ route('admin.ads.index') }}">Lista de anuncios</a>
          </li>
          <li class="{{ request()->is('admin/ads/create') ? 'active' : '' }}">
            <a href="{{ route('admin.ads.create') }}">Registrar anuncio</a>
          </li>

        </ul>
      </li>
      <li class="header">CONVOCATORIAS</li>
      <li class="mi-menu-toggle" data-mi-color="col-teal">
        <a href="javascript:void(0);">
          <i class="mi mi-icon_view_column"></i>
          <span>Grupo de convocatorias</span>
        </a>
        <ul class="mi-menu-sub">
          <li class="{{ request()->is('admin/announcement_groups') ? 'active' : '' }}">
            <a href="{{ route('admin.announcement_groups.index') }}">Lista de grupos de convocatorias</a>
          </li>
          <li class="{{ request()->is('admin/announcement_groups/create') ? 'active' : '' }}">
            <a href="{{ route('admin.announcement_groups.create') }}">Registrar grupos de convocatoria</a>
          </li>

        </ul>
      </li>
      <li class="mi-menu-toggle" data-mi-color="col-teal">
        <a href="javascript:void(0);">
          <i class="mi mi-icon_chat"></i>
          <span>Convocatorias</span>
        </a>
        <ul class="mi-menu-sub">
          <li class="{{ request()->is('admin/announcements') ? 'active' : '' }}">
            <a href="{{ route('admin.announcements.index') }}">Lista de convocatorias</a>
          </li>
          <li class="{{ request()->is('admin/announcements/create') ? 'active' : '' }}">
            <a href="{{ route('admin.announcements.create') }}">Registrar convocatoria</a>
          </li>

        </ul>
      </li>
      <li class="header">BIBLIOTECA</li>
      <li class="mi-menu-toggle" data-mi-color="col-pink">
        <a href="javascript:void(0);">
          <i class="mi mi-icon_contacts"></i>
          <span>Albumes</span>
        </a>
        <ul class="mi-menu-sub">
          <li class="{{ request()->is('admin/albums') ? 'active' : '' }}">
            <a href="{{ route('admin.albums.index') }}">Lista de álbumes</a>
          </li>
          <li class="{{ request()->is('admin/albums/create') ? 'active' : '' }}">
            <a href="{{ route('admin.albums.create') }}">Registrar álbum</a>
          </li>
        </ul>
      </li>
      <li class="mi-menu-toggle" data-mi-color="col-light-blue">
        <a href="javascript:void(0);">
          <i class="mi mi-icon_mail"></i>
          <span>Fotos</span>
        </a>
        <ul class="mi-menu-sub">
          <li class="{{ request()->is('admin/photos') ? 'active' : '' }}">
            <a href="{{ route('admin.photos.index') }}">Lista de fotos</a>
          </li>
          <li class="{{ request()->is('admin/photos/create') ? 'active' : '' }}">
            <a href="{{ route('admin.photos.create') }}">Registrar fotos</a>
          </li>
        </ul>
      </li>
      <li class="mi-menu-toggle" data-mi-color="col-pink">
        <a href="javascript:void(0);">
          <i class="mi mi-icon_assignment_turned_in"></i>
          <span>Videos</span>
        </a>
        <ul class="mi-menu-sub">
          <li class="{{ request()->is('admin/videos') ? 'active' : '' }}">
            <a href="{{ route('admin.videos.index') }}">Lista de vídeos</a>
          </li>
          <li class="{{ request()->is('admin/videos/create') ? 'active' : '' }}">
            <a href="{{ route('admin.videos.create') }}">Registrar vídeo</a>
          </li>
        </ul>
      </li>
      <li class="header">INTERFAZ DE USUARIO</li>
      <li class="mi-menu-toggle" data-mi-color="col-indigo">
        <a href="javascript:void(0);">
          <i class="mi mi-icon_settings_input_component"></i>
          <span>Slideshows</span>
        </a>
        <ul class="mi-menu-sub">
          <li class="{{ request()->is('admin/slideshows') ? 'active' : '' }}">
            <a href="{{ route('admin.slideshows.index') }}">Lista de slideshows</a>
          </li>
          <li class="{{ request()->is('admin/slideshows/create') ? 'active' : '' }}">
            <a href="{{ route('admin.slideshows.create') }}">Registrar slideshow</a>
          </li>

        </ul>
      </li>
      <li class="mi-menu-toggle" data-mi-color="col-pink">
        <a href="javascript:void(0);">
          <i class="mi mi-icon_view_list"></i>
          <span>Enlaces externos</span>
        </a>
        <ul class="mi-menu-sub">
          <li class="{{ request()->is('admin/external_links') ? 'active' : '' }}">
            <a href="{{ route('admin.external_links.index') }}">Lista de enlaces externos</a>
          </li>
          <li class="{{ request()->is('admin/external_links/create') ? 'active' : '' }}">
            <a href="{{ route('admin.external_links.create') }}">Registrar enlace externo</a>
          </li>
        </ul>
      </li>


      <li class="header">SEGURIDAD</li>
      <li class="mi-menu-toggle" data-mi-color="col-purple">
        <a href="javascript:void(0);">
          <i class="mi mi-icon_security"></i>
          <span>Permisos</span>
        </a>
        <ul class="mi-menu-sub">
          <li class="{{ request()->is('admin/permissions') ? 'active' : '' }}">
            <a href="{{ route('admin.permissions.index') }}">Lista de permisos</a>
          </li>
          <li class="{{ request()->is('admin/permissions/create') ? 'active' : '' }}">
            <a href="{{ route('admin.permissions.create') }}">Registrar permiso</a>
          </li>

        </ul>
      </li>
      <li class="mi-menu-toggle" data-mi-color="col-purple">
        <a href="javascript:void(0);">
          <i class="mi mi-icon_verified_user"></i>
          <span>Roles</span>
        </a>
        <ul class="mi-menu-sub">
          <li class="{{ request()->is('admin/roles') ? 'active' : '' }}">
            <a href="{{ route('admin.roles.index') }}">Lista de roles</a>
          </li>
          <li class="{{ request()->is('admin/roles/create') ? 'active' : '' }}">
            <a href="{{ route('admin.roles.create') }}">Registrar rol</a>
          </li>

        </ul>
      </li>
      <li class="mi-menu-toggle" data-mi-color="col-purple">
        <a href="javascript:void(0);">
          <i class="mi mi-icon_people"></i>
          <span>Usuarios</span>
        </a>
        <ul class="mi-menu-sub">
          <li class="{{ request()->is('admin/users') ? 'active' : '' }}">
            <a href="{{ route('admin.users.index') }}">Lista de usuarios</a>
          </li>
          <li class="{{ request()->is('admin/users/create') ? 'active' : '' }}">
            <a href="{{ route('admin.users.create') }}">Registrar usuario</a>
          </li>

        </ul>
      </li>

    </ul>
  </div>
  <!-- ============================================================== -->
  <!-- #End# Menu -->
  <!-- ============================================================== -->
</aside>
<!-- ============================================================== -->
<!-- #End# Sidebar -->
<!-- ============================================================== -->

<!-- Sidebar navigation -->
{{-- <div id="slide-out" class="fixed side-nav sn-bg-4">
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
        class="collapsible-header waves-effect @if(request()->is('admin')) active @endif">
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

    {{--  </ul>
</li>
<!-- Side navigation links -->

</ul>
<div class="sidenav-bg mask-strong"></div>
</div> --}}
    <!-- Sidebar navigation -->