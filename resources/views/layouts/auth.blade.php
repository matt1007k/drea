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
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/eva-icons.css') }}">
  @stack('styles')
</head>

<body>
  <div id="app" class="h-screen">
    <main class="min-h-full flex justify-center items-center bg-teal-200">
      <div class="absolute top-0 left-0 right-0 bg-linear-auth h-full z-10 -skew-x-6"></div>
      <div class="absolute bottom-0 right-0 z-20 bg-gray-500 rounded-tl-lg h-56 flex items-center justify-center">
        <img src="{{ asset('/img/drea/logo.png')}} " class="h-48">
      </div>
      @yield('content')
    </main>
  </div>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  @stack('scripts')
</body>

</html>