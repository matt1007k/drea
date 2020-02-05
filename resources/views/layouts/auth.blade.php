<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="theme-color" data-theme-color="default" content="#01579b">

  <title>DREA administración - @yield('title')</title>
  <!-- DREA icon -->
  <link rel="icon" href="img/logo.ico" type="image/x-icon" />


  <!-- Fonts -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/materionic.css') }}">
  @stack('styles')
</head>

<body class="mi-auth-layout mi-bg-gradient-default height-auto" data-auth-layout="true">
  <div id="app">
    <main>
      @yield('content')
    </main>
  </div>
  <!-- Scripts -->
  {{-- <script src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script> --}}
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('vendors/jquery.nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('vendors/node-waves/waves.js') }}"></script>
  <!-- Materionic JS -->
  <script src="{{ asset('js/materionic.js') }}"></script>
  <!-- Mirrored from www.materionic.com/demos/materionic-admin/html/snippets/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jan 2020 04:35:47 GMT -->
  @stack('scripts')
</body>

</html>