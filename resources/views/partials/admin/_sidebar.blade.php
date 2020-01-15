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
            class="collapsible-header waves-effect  {{ Request::path() ? 'active' : '' }}">
            <i class="w-fa fas fa-tachometer-alt"></i>Tablero de resumen
          </a>
        </li>
        <li>
          <a class="collapsible-header waves-effect arrow-r">
            <i class="w-fa fas fa-list"></i>Articulos<i class="fas fa-angle-down rotate-icon"></i>
          </a>
          <div class="collapsible-body">
            <ul>
              <li>
                <a href="#" class="waves-effect">Tipos de articulos</a>
              </li>

            </ul>
          </div>
        </li>

        <!-- Simple link -->
        <li>
          <a href="../alerts/alerts.html" class="collapsible-header waves-effect"><i
              class="w-fa far fa-bell"></i>Alerts</a>
        </li>

      </ul>
    </li>
    <!-- Side navigation links -->

  </ul>
  <div class="sidenav-bg mask-strong"></div>
</div>
<!-- Sidebar navigation -->