<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dirección Regional de Educación Ayacucho - @yield('title')</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />


    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
</head>

<body>
    <div id="app">
        @include('partials.pages._header')
        @include('partials.pages._nav')
        <main>
            @yield('content')
        </main>
        @include('partials.pages._footer')
    </div>
    <!-- Scripts -->
    {{-- <script src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script src="{{ asset('js/mdb.min.js') }}"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script> --}}
    @stack('scripts')
</body>

</html>