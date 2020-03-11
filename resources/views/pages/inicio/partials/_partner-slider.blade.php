<div class="row mb-3">
  <div class="col-md">
    <div class="h4 text-custom-primary">Enlaces externos</div>
    <div class="card">
      <div class="card-body">
        <section class="customer-logos slider">
          @foreach ($externalLinks as $extLink)
          <div class="slide">
            <a href="{{ $extLink->url }}">
              <img src="{{ $extLink->pathImage() }}" alt="Links" />
            </a>
          </div>
          @endforeach
          {{-- <div class="slide"><img
                            src="http://www.dreayacucho.gob.pe/system/external_links/images/000/000/011/original/sineace.png?1572992432">
                    </div> --}}
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
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
    });
});
</script>
@endpush