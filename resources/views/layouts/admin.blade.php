<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta content="IE=Edge" http-equiv="X-UA-Compatible" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    name="viewport">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Set Address Bar Color for Mobile Browsers -->
  <meta name="theme-color" data-theme-color="default">

  <title>DREA administración - @yield('title')</title>
  <!-- In mobile mode, We used 128x128 size icon to display the icon correctly when adding shortcut to your screen. -->
  <!-- DREA icon -->
  <link rel="icon" href="img/drea/logo.ico" type="image/x-icon" />

  <!-- Styles -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/balloon.css') }}" rel="stylesheet">
  <link href="{{ asset('css/eva-icons.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">

  @stack('styles')
</head>

<body class="bg-gray-200">

  <div class="grid grid-layout-admin">
    @include('partials.admin._sidebar')
    <section>
      @include('partials.admin._nav')
      @yield('content-header')
      @yield('content')
    </section>
  </div>
  <!-- Plugins -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

  <script>
    @if(session('msg'))
      swal({
          title: "{{ session('msg') }}",
          type: 'success',
      });
    @endif
  </script>
  @stack('scripts')
</body>
</html>
