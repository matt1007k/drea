<nav class="navbar navbar-expand-lg navbar-dark bg-custom-primary shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img height="64px" class="mr-1" src="{{ asset('img/drea/logo.png') }}" alt="Logo DREA">
            <span class="font-weight-bold">
                <div>DIRECCIÓN REGIONAL DE</div>
                EDUCACIÓN DE AYACUCHO
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownInst" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" v-pre>
                        La Institución
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownInst">
                        <a class="dropdown-item" href="{{ url('/nosotros') }}">
                            Nosotros
                        </a>
                        <a class="dropdown-item" href="{{ url('/organigrama') }}">
                            Organigrama
                        </a>
                        <a class="dropdown-item" href="{{ url('/directorio-institucional') }}">
                            Directorio Institucional
                        </a>
                        <a class="dropdown-item" href="{{ url('/superior') }}">
                            Superior
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/unidades-gestion') }}">Unidades de Gestión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/documentos') }}">Documentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contratacion-docentes') }}">Contratación Docente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/galeria-fotos') }}">Galeria de Fotos</a>
                </li>

            </ul>
        </div>
    </div>
</nav>