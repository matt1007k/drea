<div id="carouselHomeIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($slideshows as $key => $slideshow)
        <li data-target="#carouselHomeIndicators" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}">
        </li>
        @endforeach
    </ol>
    <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        @foreach ($slideshows as $key => $slide)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
            style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
            <div class="carousel-caption d-none d-md-block">
                <a href="{{ url($slide->slug) }}" class="h3 text-white">{{ $slide->titulo }}</a>
                {{-- <p class="lead">This is a description for the first slide.</p> --}}
            </div>
        </div>
        @endforeach
        <!-- Slide Two - Set the background image for this slide in the line below -->
        {{-- <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
            <div class="carousel-caption d-none d-md-block">
                <a href="#" class="h3 text-white">Second Slide</a>
                <p class="lead">This is a description for the second slide.</p>
            </div>
        </div> --}}
    </div>
    <a class="carousel-control-prev" href="#carouselHomeIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselHomeIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>