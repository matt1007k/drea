<div class="row mb-3">
    <div class="col-md">
        <div class="h4 text-custom-primary">Enlaces externos</div>
        <div class="card">
            <div class="card-body">
                <section class="customer-logos slider">
                    <div class="slide"><img
                            src="http://www.dreayacucho.gob.pe/system/external_links/images/000/000/005/original/mh.jpg?1496253474">
                    </div>
                    <div class="slide"><img
                            src="http://www.dreayacucho.gob.pe/system/external_links/images/000/000/011/original/sineace.png?1572992432">
                    </div>
                    <div class="slide"><img
                            src="http://www.dreayacucho.gob.pe/system/external_links/images/000/000/001/original/beca18.jpg?1496251952">
                    </div>
                    <div class="slide"><img
                            src="http://www.dreayacucho.gob.pe/system/external_links/images/000/000/004/original/gr.jpg?1496253426">
                    </div>
                    <div class="slide"><img
                            src="http://www.dreayacucho.gob.pe/system/external_links/images/000/000/003/original/banco_de_la_nacion.jpg?1496253366">
                    </div>
                    <div class="slide"><img
                            src="http://www.dreayacucho.gob.pe/system/external_links/images/000/000/007/original/perueduca.jpg?1496253519">
                    </div>
                    <div class="slide"><img
                            src="http://www.dreayacucho.gob.pe/system/external_links/images/000/000/002/original/siagie.jpg?1496252095">
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script>
    $(function() {
    $(".customer-logos").slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }
        ]
    });
});
</script>
@endpush