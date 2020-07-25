<!-- Navbar -->
{{-- <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

    <!-- SideNav slide-out button -->
    <div class="float-left">
        <a href="javascript:void(0);" class="mi-navbar-toggle"></a>
    </div>

    <!-- Breadcrumb -->
    <div class="breadcrumb-dn mr-auto">
    </div>

    <div class="d-flex change-mode">



        <!-- Navbar links -->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">

            <div class="ml-auto mb-0 mr-3 change-mode-wrapper">
                <button class="btn btn-outline-black btn-sm" id="dark-mode">Modo oscuro</button>
            </div>

            <!-- Dropdown -->
            <li class="nav-item dropdown notifications-nav">
                <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fas fa-bell"></i><span class="badge red">3</span>
                </a>
                <div class="dropdown-menu  dropdown-menu-right dropdown-primary"
                    aria-labelledby="navbarDropdownMenuLink">
                    <div class="h2 dropdown-header text-center">Notificaciones</div>
                    <a class="dropdown-item" href="#">
                        <i class="far fa-money-bill-alt mr-2" aria-hidden="true"></i>
                        <span>New order received</span>
                        <span class="float-right"><i class="far fa-clock" aria-hidden="true"></i> 13 min</span>
                    </a>

                    <div class="dropdown-footer text-center">
                        <a href="#" class="btn-link btn-white btn-block">Marcar todas como leídas</a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fas fa-user d-xl-none d-sm-inline-block"></i><span
                        class="clearfix d-none d-sm-inline-block">{{ Auth::user()->name}} </span>
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
    <a class="dropdown-item" href="#">Perfil</a>
    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
        Cerrar sesión
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
</li>

</ul>
<!-- Navbar links -->

</div>

</nav> --}}
<!-- Navbar -->
<nav class="h-16 px-3 flex items-center">
    <ul class="ml-auto flex items-center justify-center">
        <li class="py-2 px-2 ml-4">
            <button class="btn btn-primary">
                <i class="eva eva-plus left"></i>
                Nuevo aviso
            </button>
        </li>
        <li class="py-2 px-2 ml-4">
            <a href="#" class="text-gray-500 hover:text-gray-700">
                <i class="eva eva-bell-outline eva-2x"></i>
            </a>
        </li>
        <li class="p-2 ml-4">
            <img src="https://image.flaticon.com/icons/svg/3048/3048127.svg" alt="avatar" class="h-10 w-10 border-4 border-white bg-gray-500 rounded-full cursor-pointer">
        </li>
    </ul>
</nav>