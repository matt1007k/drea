<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>DREA administración - @yield('title')</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />


  <!-- Fonts -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
  @stack('styles')
</head>

<body class="fixed-sn white-skin">
  <div id="app">
    @include('partials.admin._header')

    <main>
      @yield('breadcrumb')
      @yield('content')
    </main>
  </div>
  <!-- Scripts -->
  {{-- <script src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script> --}}
  <script src="{{ asset('js/app.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script src="{{ asset('js/mdb.min.js') }}"></script>

  <!-- Initializations -->
  <script>
    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').material_select();
    });

    // Tooltips Initialization
    $(function() {
  $('[data-toggle="tooltip"]').tooltip({
      html: true
  });
});

    $(function () {
      $('#dark-mode').on('click', function (e) {

        e.preventDefault();
        $('h4, button').not('.check').toggleClass('dark-grey-text text-white');
        $('.list-panel a').toggleClass('dark-grey-text');

        $('footer, .card').toggleClass('dark-card-admin');
        $('body, .navbar').toggleClass('white-skin navy-blue-skin');
        $(this).toggleClass('white text-dark btn-outline-black');
        $('body').toggleClass('dark-bg-admin');
        $('h6, .card, p, td, th, i, li a, h4, input, label').not(
          '#slide-out i, #slide-out a, .dropdown-item i, .dropdown-item').toggleClass('text-white');
        $('.btn-dash').toggleClass('grey blue').toggleClass('lighten-3 darken-3');
        $('.gradient-card-header').toggleClass('white black lighten-4');
        $('.list-panel a').toggleClass('navy-blue-bg-a text-white').toggleClass('list-group-border');

        $('.notifications-nav .dropdown-menu .dropdown-footer a').toggleClass('btn-dark').toggleClass('btn-white');
      });
     
    });
  </script>
  <script>
    @if(session('msg')) 
        toastr.success('{{session('msg')}}');
    @endif
  </script>

  @stack('scripts')
</body>

</html>