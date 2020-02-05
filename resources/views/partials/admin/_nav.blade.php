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
<div class="mi-sidebar-overlay"></div>
<!-- ============================================================== -->
<!-- #Begin# Navbar -->
<!-- ============================================================== -->
<nav class="navbar">
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- #Begin# Search -->
        <!-- ============================================================== -->
        <div class="mi-search-bar">
            <div class="mi-search-close">
                <i class="mi mi-icon_arrow_back col-light-blue-900"></i>
            </div>
            <input type="text" placeholder="Search..." id="mi_navbar_search_input" autocomplete="off">
            <div class="mi-search-clear waves-effect" style="display: none;">
                <i class="mi mi-icon_close col-light-blue-900"></i>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- #End# Search -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- #Begin# Navbar Header -->
        <!-- ============================================================== -->
        <div class="navbar-header mi-navbar-toggle-left">
            <a href="javascript:void(0);" class="navbar-toggle waves-effect" data-toggle="collapse"
                data-target="#mi_navbar_sub_menu"><i class="mi mi-icon_more_vert"></i></a>
            <a href="javascript:void(0);" data-searchbar-open="true" class="navbar-toggle waves-effect m-r-0"><i
                    class="mi mi-icon_search"></i></a>
            <a href="javascript:void(0);" class="mi-navbar-toggle"></a>
            <a class="navbar-brand"> </a>
        </div>
        <div class="collapse navbar-collapse" id="mi_navbar_sub_menu">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:void(0);" data-searchbar-open="true" class="waves-effect"><i
                            class="mi mi-icon_search"></i></a></li>

                <!-- ============================================================== -->
                <!-- #Begin# Notifications -->
                <!-- ============================================================== -->
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle waves-effect" data-toggle="dropdown">
                        <i class="mi mi-icon_notifications"></i>
                        <span class="badge">5</span>
                    </a>
                    <div class="dropdown-menu mi-menu-notifications">
                        <div class="mi-card">
                            <div class="mi-card-header bg-pink">
                                <div class="mi-title">Notificaciones</div>
                                <ul class="nav nav-tabs mi-nav-tab-right">
                                    <li><a href="#mi_notification_tab_task" data-toggle="tab"><i
                                                class="mi mi-icon_assignment_ind"></i></a></li>
                                    <li class="active"><a href="#mi_notification_tab_notify" data-toggle="tab"><i
                                                class="mi mi-icon_notifications_active"></i></a></li>
                                </ul>
                            </div>
                            <div class="mi-card-content padding-0">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="mi_notification_tab_notify">
                                        <div class="mi-tab-pane-content">
                                            <a href="javascript:void(0)"
                                                class="media mi-media-notifications waves-effect">
                                                <div class="media-left">
                                                    <img src="../assets/images/users/boy.png" class="img-circle">
                                                </div>
                                                <div class="media-body">
                                                    <span class="font-bold col-blue">John Doe </span>
                                                    <small>Nulla vel metus scelerisque ante sollicitudin
                                                        commodo</small><br>
                                                    <small>Just Now</small>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="mi-card-footer text-center">
                                            <a href="javascript:void(0)">See All Notifications</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="mi_notification_tab_task">
                                        <div class="mi-tab-pane-content">
                                            <a href="apps/taskapp/task_tracking.html"
                                                class="media mi-media-task waves-effect">
                                                <div class="media-left">
                                                    <img src="../assets/images/users/boy.png" class="img-circle">
                                                </div>
                                                <div class="media-body">
                                                    <span class="font-bold">John Doe</span>
                                                    <div class="mi-media-task-title">Nulla vel metus scelerisque ante
                                                        sollicitudin commodo</div>
                                                </div>
                                                <div class="media-right">
                                                    <b class="col-pink">Todo</b>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="mi-card-footer text-center">
                                            <a href="apps/taskapp/task_tracking.html">See All Tasks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- #End# Notifications -->
                <!-- ============================================================== -->
                <li id="mi_right_sidebar_btn"><a href="javascript:void(0);" class="waves-effect"><i
                            class="mi mi-icon_apps"></i></a></li>
                <!-- ============================================================== -->
                <!-- #Begin# User Menu -->
                <!-- ============================================================== -->
                <li class="dropdown mi-menu-user">
                    <a href="javascript:void(0);" class="dropdown-toggle waves-effect waves-circle"
                        data-toggle="dropdown">
                        <img src="https://image.flaticon.com/icons/svg/761/761824.svg" class="img-circle">
                    </a>
                    <div class="dropdown-menu">
                        <div class="mi-card">
                            <div class="mi-card-content padding-0">
                                <div class="mi-card-user bg-blue">
                                    <div class="mi-card-user-name">{{ Auth::user()->name }}</div>
                                    <div class="mi-card-user-surname">{{ Auth::user()->email }}</div>
                                    <div class="image">
                                        <img src="https://image.flaticon.com/icons/svg/761/761824.svg" width="48"
                                            height="48">
                                    </div>
                                    <div class="mi-profile-content">
                                        <div class="name">{{ Auth::user()->name }} </div>
                                        <div class="email">{{ Auth::user()->email }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mi-card-content mi-menu-list">
                                <a href="snippets/profile.html" class="list-group-item waves-effect">
                                    <i class="mi mi-icon_create col-orange"></i>
                                    <span>Editar perfil</span>
                                </a>
                                <a href="snippets/profile.html" class="list-group-item waves-effect">
                                    <i class="mi mi-icon_settings col-blue-grey"></i>
                                    <span>Configuraciones</span>
                                </a>
                                <hr>
                                <a class="list-group-item waves-effect" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                                    <i class="mi mi-icon_power_settings_new col-pink"></i>
                                    <span>Cerrar sesión</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- #End# User Menu -->
                <!-- ============================================================== -->
            </ul>
        </div>
        <!-- ============================================================== -->
        <!-- #End# Navbar Header -->
        <!-- ============================================================== -->
    </div>
</nav>
<!-- ============================================================== -->
<!-- #End# Navbar -->
<!-- ============================================================== -->