<div class="container mt-2">
    <div class="row">
        <div class="col-md-8 col-sm-12">
            @include('pages.inicio.partials._avisos')
            @include('pages.inicio.partials._documentos')
        </div>
        <div class="col-md col-sm-12 mb-2">
            <div class="h4 text-custom-primary">Siguenos en Facebook</div>
            <div class="card">
                <div class="card-body overflow-y-scroll">
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDre-Ayacucho-332681333522589&amp;tabs=timeline&amp;width=340&amp;height=500&amp;small_header=true&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true"
                        width="100%" height="450" style="border:none;overflow:hidden" scrolling="yes" frameborder="0"
                        allowtransparency="true"></iframe>
                </div>
            </div>

            <div class="h4 text-custom-primary mt-3">Anuncios</div>
            <div class="card">
                <div class="card-body">
                    <img src="http://www.dreayacucho.gob.pe/ckeditor_assets/pictures/596/content_etico.jpg" alt="etico"
                        class="img-fluid">
                    <img src="http://www.dreayacucho.gob.pe/ckeditor_assets/pictures/300/content_esc2019.jpg"
                        alt="content" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    @include('pages.inicio.partials._partner-slider')
</div>