@extends('layouts.app')

@section('title', 'Videos')

@section('content')
<div class="container mb-3 mt-2">
    <div class="row">

        <div class="col-md">
            <div class="cardd">
                <div class="card-bodyd">

                    <div class="h2 mb-3">Vídeos</div>
                    <div class="grid">
                        <!-- columns -->
                        <div class="grid-col grid-col--1"></div>
                        <div class="grid-col grid-col--2"></div>
                        <div class="grid-col grid-col--3"></div>
                        <div class="grid-col grid-col--4"></div>
                        @forelse($videos as $video)
                        <div class="grid-item video bg-light">
                            <a class="venobox text-dark" data-gall="playlist01" data-title="{{ $video->titulo }}"
                                data-autoplay="true" data-vbtype="video" href="https://youtu.be/{{ $video->video }}">
                                <div class="content">
                                    <div class="title">{{ $video->titulo }}</div>
                                </div>
                                <i class="fa fa-play fa-2x"></i>
                            </a>
                        </div>
                        @empty
                        <div>No tienes vídeos...</div>
                        @endforelse

                        <div class="grid-item video bg-light">
                            <a class="venobox  text-dark" data-gall="playlist01" data-title="text test"
                                data-autoplay="true" data-vbtype="video" href="https://youtu.be/KmWm6YxC2KY">
                                <div class="content">
                                    <div class="title">text test</div>
                                </div>
                                <i class="fa fa-play fa-2x"></i>
                            </a>
                        </div>
                        <div class="grid-item video bg-light">
                            <a class="venobox text-dark" data-gall="playlist01" data-title="text test"
                                data-autoplay="true" data-vbtype="video" href="https://youtu.be/KmWm6YxC2KY">
                                <div class="content">
                                    <div class="title">text test</div>
                                </div>
                                <i class="fa fa-play fa-2x"></i>
                            </a>
                        </div>

                        <div class="grid-item video bg-light">
                            <a class="venobox text-dark" data-gall="playlist01" data-title="text test"
                                data-autoplay="true" data-vbtype="video" href="https://youtu.be/KmWm6YxC2KY">
                                <div class="content">
                                    <div class="title">text test</div>
                                </div>
                                <i class="fa fa-play fa-2x"></i>
                            </a>
                        </div>
                        <div class="grid-item video bg-light">
                            <a class="venobox text-dark" data-gall="playlist01" data-title="text test"
                                data-autoplay="true" data-vbtype="video" href="https://youtu.be/KmWm6YxC2KY">
                                <div class="content">
                                    <div class="title">text test</div>
                                </div>
                                <i class="fa fa-play fa-2x"></i>
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

    .video {
        display: flex;
        position: relative;
        width: 100%;
        height: 160px;
        align-items: center;
        justify-content: center;
        color: #fff;
    }

    .grid-item .content {
        position: absolute;
        color: #fff;
        background-color: rgba(0, 0, 0, .8);
        bottom: 0;
        margin-bottom: 1em;
        left: 0;
    }

    .grid-item {
        margin-bottom: .5em;
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

    @media (max-width: 768px) {
        .grid {
            display: block;
        }
    }

    /* 3 columns at medium size */
    @media (min-width: 768px) {
        .grid-col--2 {
            display: block;
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

        .grid {
            width: 100%;
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
                // framewidth: '100%',        
                // frameheight: '100%',       
                titleattr: 'data-title',
                numeratio: true,
            });
        });
</script>
@endpush