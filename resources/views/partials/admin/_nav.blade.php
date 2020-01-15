<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

    <!-- SideNav slide-out button -->
    <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
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
                        class="clearfix d-none d-sm-inline-block">Max
                        Meza</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Perfil</a>
                    <a class="dropdown-item" href="#">Cerrar sesión</a>
                </div>
            </li>

        </ul>
        <!-- Navbar links -->

    </div>

</nav>
<!-- Navbar -->

@push('scripts')
<script>
    $(function(){
    // SideNav Initialization
    $(".button-collapse").sideNav();
    })
</script>
@endpush