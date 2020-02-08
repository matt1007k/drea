@extends('layouts.app')

@section('title', 'Galeria de fotos')

@section('content')
<div class="container mb-3 mt-2">
    <div class="w-25 w-sm-100 bg-white rounded py-2 px-2">
        <label for="album">Filtar por Galeria</label>
        <select name="album" id="album" class="mdb-select colorful-select dropdown-primary md-dropdown">
            @forelse($albums as $albumf)
            <option value="{{ $albumf->slug }}" @if($albumf->slug == $album) selected @endif>{{ $albumf->titulo }}
            </option>
            @empty
            <option value="" disabled>No tienes ninguna galería...</option>
            @endforelse
        </select>
    </div>
    <div class=" row mt-2">

        <div class="col-md-3 mb-sm-2">
            <div class="card">
                <div class="card-body">
                    <div class="h4">Galería</div>
                    <ul class="list-unstyled">
                        <li class="">
                            <img src="{{ $albumdb->pathImage() }}" alt="albumdb image" class="rounded-lg w-100 mb-2">
                            <div class="">
                                <div class="h5 text-custom-primary-dark font-weight-bold">
                                    {{ $albumdb->titulo }}
                                </div>
                                <p>{{ $albumdb->descripcion }}</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="cardd">
                <div class="card-bodyd">

                    <div class="h2 mb-3">Fotos</div>
                    <div class="grid">
                        <!-- columns -->
                        <div class="grid-col grid-col--1"></div>
                        <div class="grid-col grid-col--2"></div>
                        <div class="grid-col grid-col--3"></div>
                        {{--<div class="grid-col grid-col--4"></div>--}}
                        @forelse($albumdb->photos as $photo)
                        <div class="grid-item">
                            <a class="venobox" data-gall="gallery01" data-title="{{ $photo->titulo }}"
                                href="{{ $photo->pathImage() }}">
                                <div class="content">
                                    <div class="title">{{ $photo->titulo }}</div>
                                </div>
                                <img src="{{ $photo->pathImage() }}" alt="{{ $photo->titulo }}" />
                            </a>
                        </div>
                        @empty
                        <div>No tienes fotos...</div>
                        @endforelse

                        <div class="grid-item">
                            <a class="venobox" data-gall="gallery01" data-title="text test"
                                href="http://www.dreayacucho.gob.pe/system/photos/images/000/000/001/original/ministro_coar.jpg?1550845999">
                                <div class="content">
                                    <div class="title">text test</div>
                                </div>
                                <img src="http://www.dreayacucho.gob.pe/system/photos/images/000/000/001/original/ministro_coar.jpg?1550845999"
                                    alt="image alt" />
                            </a>
                        </div>
                        <div class="grid-item">
                            <a class="venobox" data-gall="gallery01" data-title="text test"
                                href="http://www.dreayacucho.gob.pe/system/photos/images/000/000/005/original/mercedes3.jpg?1550847440">
                                <div class="content">
                                    <div class="title">text test</div>
                                </div>
                                <img src="http://www.dreayacucho.gob.pe/system/photos/images/000/000/005/original/mercedes3.jpg?1550847440"
                                    alt="image alt" />
                            </a>
                        </div>
                        <div class="grid-item">
                            <a class="venobox" data-gall="gallery01" data-title="text test"
                                href="http://www.dreayacucho.gob.pe/system/photos/images/000/000/004/original/mercedes2.jpg?1550847271">
                                <div class="content">
                                    <div class="title">text test</div>
                                </div>
                                <img src="http://www.dreayacucho.gob.pe/system/photos/images/000/000/004/original/mercedes2.jpg?1550847271"
                                    alt="image alt" />
                            </a>
                        </div>
                        <div class="grid-item">
                            <a class="venobox" data-gall="gallery01" data-title="text test"
                                href="http://www.dreayacucho.gob.pe/system/photos/images/000/000/003/original/52111522_1078952455562136_5664431435239391232_o.jpg?1550847065">
                                <div class="content">
                                    <div class="title">text test</div>
                                </div>
                                <img src="http://www.dreayacucho.gob.pe/system/photos/images/000/000/003/original/52111522_1078952455562136_5664431435239391232_o.jpg?1550847065"
                                    alt="image alt" />
                            </a>
                        </div>
                        <div class="grid-item">
                            <a class="venobox" data-gall="gallery01" data-title="text test"
                                href="http://www.dreayacucho.gob.pe/system/photos/images/000/000/002/original/mercedes1.jpg?1550846984">
                                <div class="content">
                                    <div class="title">text test</div>
                                </div>
                                <img src="http://www.dreayacucho.gob.pe/system/photos/images/000/000/002/original/mercedes1.jpg?1550846984"
                                    alt="image alt" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@push('styles')
<style>
    /* with flexbox */
    .grid {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
    }

    .grid-col {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        padding: 0 .1em;
    }

    .grid-item img {
        width: 100%;
    }

    .grid-item .content {
        position: absolute;
        color: #fff;
        background-color: rgba(0, 0, 0, .8);
    }

    .grid-item .content .title {
        margin: .2em .5em;
        font-size: 1em;
    }

    /* 2 columns by default, hide columns 2 & 3 */
    .grid-col--2,
    .grid-col--3 {
        display: none
    }

    /* 3 columns at medium size */
    @media (min-width: 768px) {
        .grid-col--2 {
            display: block;
        }

        /* show column 2 */
        .grid-item img {
            margin-bottom: .8em;
        }

        .grid-item .content {
            opacity: 0;
            transform: translateX(-.5em);
            transition: all 1s;
            will-change: opacity, transform;
        }

        .grid-item:hover .content {
            opacity: 1;
            transform: translateX(0);
        }
    }

    /* 4 columns at large size */
    @media (min-width: 1080px) {
        .grid-col--3 {
            display: block;
        }

        /* show column 3 */
    }
</style>
<link rel="stylesheet" href="{{ asset('css/venobox.css') }}" type="text/css" media="screen" />
@endpush

@push('scripts')
<script src="https://unpkg.com/colcade@0/colcade.js"></script>
<script type="text/javascript" src="{{ asset('js/venobox.min.js') }}"></script>
<script>
    // selector string as first argument
        var colc = new Colcade( '.grid', {
            columns: '.grid-col',
            items: '.grid-item'
        });
        $(function(){
            $('.venobox').venobox({
                framewidth: '100%',        // default: ''
                frameheight: '100%',       // default: ''
                titleattr: 'data-title',
                numeratio: true,
            });
        });
    
    $('#album').on('change', function(){
       var value = $(this).val();
        window.location.href = "/galeria?album="+value;
    });
</script>
@endpush