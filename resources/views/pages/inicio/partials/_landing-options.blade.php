<div class="container options-landing mb-4">
    <div class="row">

        <!-- Grid column -->
        <div class="col-xl-3 col-md-6 mb-md-4 px-sm-0">
            <!-- Card -->
            <div class="card mt-0 bg-danger text-white card-cascade cascading-admin-card">
                <!-- Card content -->
                <a href="http://sisgedo.regionayacucho.gob.pe/app/main.php"
                    class="d-flex justify-content-between card-body card-body-cascade text-white">
                    <div>
                        <h4>SISGEDO</h4>
                        <p class="card-text text-white">Sistema de Gestión Documentaria, ubica tus expedientes aquí.</p>
                    </div>
                    <div>
                        <img src="{{ asset('/img/icons/computer.png') }}" alt="Computer" srcset="">
                    </div>
                </a>
            </div>
            <!-- Card -->
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-3 col-md-6 mb-md-0 mb-md-4 pr-0 pl-0">
            <!-- Card -->
            <div class="card mt-0 bg-success text-white card-cascade cascading-admin-card">
                <!-- Card content -->
                <a href="{{ url('/avisos') }}"
                    class="d-flex justify-content-between card-body card-body-cascade text-white">
                    <div>
                        <h4>Publicaciones</h4>
                        <p class="card-text text-white">Infórmate con avisos, noticias y comunicados oficiales de la
                            DREA.</p>
                    </div>
                    <div>
                        <img src="{{ asset('/img/icons/blogging.png') }}" alt="Computer" srcset="">
                    </div>
                </a>
            </div>
            <!-- Card -->
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-3 col-md-6 mb-md-4 pr-0 pl-0">
            <!-- Card -->
            <div class="card mt-0 bg-info text-white card-cascade cascading-admin-card">
                <!-- Card content -->
                <a href="{{ url('/videos') }}"
                    class="d-flex justify-content-between card-body card-body-cascade text-white">
                    <div class="pr-1">
                        <h4>Videos</h4>
                        <p class="card-text text-white">Mira nuestros materiales audiovisuales elaborado por la DREA</p>
                    </div>
                    <div>
                        <img src="{{ asset('/img/icons/album.png') }}" alt="Computer" srcset="">
                    </div>
                </a>
            </div>
            <!-- Card -->
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-xl-3 col-md-6 mb-0 pl-0 pr-xl-0">
            <!-- Card -->
            <div class="card mt-0 bg-warning text-white card-cascade cascading-admin-card">
                <!-- Card content -->
                <a href="{{ url('/documentos') }}"
                    class="d-flex justify-content-between card-body card-body-cascade text-white">
                    <div>
                        <h4>Documentos</h4>
                        <p class="card-text text-white">Buscar y consulta los documentos oficiales subidos por la
                            DREA</p>
                    </div>
                    <div>
                        <img src="{{ asset('/img/icons/document.png') }}" alt="Computer" srcset="">
                    </div>
                </a>
            </div>
            <!-- Card -->
        </div>
        <!-- Grid column -->

    </div>
</div>