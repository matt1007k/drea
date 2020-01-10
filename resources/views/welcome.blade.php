@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div id="carouselHomeIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselHomeIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselHomeIndicators" data-slide-to="1"></li>
        <li data-target="#carouselHomeIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active"
            style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
            <div class="carousel-caption d-none d-md-block">
                <a href="#" class="h3 text-white">First Slide</a>
                <p class="lead">This is a description for the first slide.</p>
            </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
            <div class="carousel-caption d-none d-md-block">
                <a href="#" class="h3 text-white">Second Slide</a>
                <p class="lead">This is a description for the second slide.</p>
            </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
            <div class="carousel-caption d-none d-md-block">
                <a href="#" class="h3 text-white">Third Slide</a>
                <p class="lead">This is a description for the third slide.</p>
            </div>
        </div>
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

<div class="options-landing">
    <div class="row">

        <!-- Grid column -->
        <div class="col-xl-3 col-md-6 mb-md-4 px-sm-0">
            <!-- Card -->
            <div class="card bg-danger text-white card-cascade cascading-admin-card">
                <!-- Card content -->
                <a href="#" class="d-flex justify-content-between card-body card-body-cascade text-white">
                    <div>
                        <h4>SISGUEDO</h4>
                        <p class="card-text text-white">Sistema de Gestión Documentaria, ubica tus expediente aqui.</p>
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
            <div class="card bg-success text-white card-cascade cascading-admin-card">
                <!-- Card content -->
                <a href="#" class="d-flex justify-content-between card-body card-body-cascade text-white">
                    <div>
                        <h4>Publicaciones</h4>
                        <p class="card-text text-white">Informate con documentos, avisos y comunicados oficiales.</p>
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
            <div class="card bg-info text-white card-cascade cascading-admin-card">
                <!-- Card content -->
                <a href="#" class="d-flex justify-content-between card-body card-body-cascade text-white">
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
        <div class="col-xl-3 col-md-6 mb-0 pl-0">
            <!-- Card -->
            <div class="card bg-warning text-white card-cascade cascading-admin-card">
                <!-- Card content -->
                <a href="#" class="d-flex justify-content-between card-body card-body-cascade text-white">
                    <div>
                        <h4>Documentos</h4>
                        <p class="card-text text-white">Documentos oficiales elaborados por la DREA</p>
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

@endsection