<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="theme-color" data-theme-color="default">

  <title>DREA administración - @yield('title')</title>
  <!-- DREA icon -->
  <link rel="icon" href="img/drea/logo.ico" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
  <link href="{{ asset('fonts/material-icons/MaterialIcons-Regular.woff2')}}" rel="stylesheet" type="text/css">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/materionic.css') }}">
  @stack('styles')
</head>

<body class="mi-theme-default mi-sidebar-fluid mi-sidebar-md">
  <div id="app">
    <div class="mi-sidebar-overlay"></div>
    @include('partials.admin._header')

    <section class="mi-content">
      @yield('breadcrumb')
      @yield('content')
    </section>
    <!-- ============================================================== -->
    <!-- #Begin# Theme Settings -->
    <!-- ============================================================== -->
    <a href="javascript:void(0);" class="btn bg-pink btn-lg waves-effect btn-theme-settings">
      <i class="mi mi-icon_settings rotating"></i>
    </a>
    <div class="mi-theme-sidebar">
      <div class="mi-card">
        <div class="mi-card-header bg-pink">
          <div class="mi-title">Theme Settings</div>
          <ul class="mi-card-header-tools">
            <li>
              <a href="javascript:void(0)" class="waves-effect"><i class="mi mi-icon_close"></i></a>
            </li>
          </ul>
        </div>
        <div class="mi-card-content">
          <label>Theme Color</label>
          <div id="palette"></div>
          <div class="mi-divider-5 m-t-10 m-l--20 m-r--20"></div>
          <label class="m-b-0 m-t-5">Sidebar: Options</label>
          <div class="row">
            <div class="col-md-12 clearfix">
              <h5 class="pull-left font-normal m-b-5">Dark</h5>
              <div class="mi-switch pull-right m-t-5">
                <label><input type="checkbox" id="mi_sidebar_dark_checkbox"><span class="bg-cyan"></span></label>
              </div>
            </div>
            <!---->
            <div class="col-md-12 clearfix">
              <h5 class="pull-left font-normal m-b-5">User Card</h5>
              <div class="mi-switch pull-right m-t-5">
                <label><input type="checkbox" data-sidebar-options="user-card"><span class="bg-cyan"></span></label>
              </div>
            </div>
            <!---->
            <div class="col-md-12 clearfix">
              <h5 class="pull-left font-normal m-b-5">Show Logo</h5>
              <div class="mi-switch pull-right m-t-5">
                <label><input type="checkbox" data-sidebar-options="show-logo" checked><span
                    class="bg-cyan"></span></label>
              </div>
            </div>
            <!---->
            <div class="col-md-12 clearfix">
              <h5 class="pull-left font-normal m-b-5">Full Height</h5>
              <div class="mi-switch pull-right m-t-5">
                <label><input type="checkbox" data-sidebar-options="fluid" checked><span class="bg-cyan"></span></label>
              </div>
            </div>
            <!---->
            <div class="col-md-12 clearfix">
              <h5 class="pull-left font-normal m-b-5">Bordered</h5>
              <div class="mi-switch pull-right m-t-5">
                <label><input type="checkbox" data-sidebar-options="bordered"><span class="bg-cyan"></span></label>
              </div>
            </div>
          </div>
          <div class="mi-divider-5 m-l--20 m-r--20"></div>
          <h5>Sidebar: Horizantal Sizing</h5>
          <div class="row">
            <div class="col-md-12 clearfix m-l--5" id="mi_theme_horizantal_sizing">
              <input name="radio_group1" type="radio" id="radio_2" class="bg-blue" data-mi-sidebar="mi-sidebar-sm" />
              <label class="m-r-15" for="radio_2">Small</label>
              <input name="radio_group1" type="radio" id="radio_1" class="bg-blue" data-mi-sidebar="mi-sidebar-md"
                checked />
              <label class="m-r-15" for="radio_1">Medium</label>
              <input name="radio_group1" type="radio" id="radio_3" class="bg-blue" data-mi-sidebar="" />
              <label class="m-r-15" for="radio_3">None</label>
            </div>
          </div>
          <div class="mi-divider-5 m-l--20 m-r--20"></div>
          <h5>Sidebar: Vertical Sizing</h5>
          <div class="row">
            <div class="col-md-12 clearfix m-l--5" id="mi_theme_vertical_sizing">
              <input name="radio_group2" type="radio" id="radio_5" class="bg-blue" data-mi-menu="mi-menu-sm">
              <label class="m-r-15" for="radio_5">Small</label>
              <input name="radio_group2" type="radio" id="radio_6" class="bg-blue" data-mi-menu="mi-menu-md">
              <label class="m-r-15" for="radio_6">Medium</label>
              <input name="radio_group2" type="radio" id="radio_4" class="bg-blue" data-mi-menu="" checked>
              <label class="m-r-15" for="radio_4">None</label>
            </div>
          </div>
          <div class="mi-divider-5 m-l--20 m-r--20"></div>
          <label class="m-b-0 m-t-5">Navbar</label>
          <div class="row">
            <div class="col-md-12 clearfix">
              <h5 class="pull-left font-normal m-b-5">None</h5>
              <div class="mi-switch pull-right m-t-5">
                <label><input type="checkbox" id="mi_navbar_hide_input"><span class="bg-cyan"></span></label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- #End# Theme Settings -->
    <!-- ============================================================== -->
  </div>
  <!-- Scripts -->
  {{-- <script src="{{ asset('/js/jquery-3.4.1.min.js') }}"></script> --}}
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('vendors/jquery.nicescroll/jquery.nicescroll.min.js') }}"></script>
  <script src="{{ asset('vendors/node-waves/waves.js') }}"></script>
  <link href="{{ asset('vendors/waitme/waitMe.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('vendors/kendo-ui-core/kendo.common-material.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('vendors/kendo-ui-core/kendo.material.min.css') }}" rel="stylesheet" />
  <script src="{{ asset('vendors/kendo-ui-core/kendo.ui.core.min.js') }}"></script>
  <script src="{{ asset('vendors/bootstrap-growl/bootstrap-growl.js') }}"></script>
  <script src="{{ asset('vendors/jquery-searchable/jquery.searchable-1.0.0.min.js') }}"></script>
  <script src="{{ asset('vendors/waitme/waitMe.min.js') }}"></script>
  <script src="{{ asset('vendors/jquery-knob/jquery.knob.min.js') }}"></script>
  <!-- Materionic JS -->
  <script src="{{ asset('js/materionic.js') }}"></script>
  <script src="{{ asset('js/app.demo.js') }}"> </script>

  <!-- Initializations -->
  <script>
    // Tooltips Initialization
    $(function() {
  $('[data-toggle="tooltip"]').tooltip({
      html: true
  });
});
// $(window).load(function () {
//       $.miApp.demo.initDashboard();
//       $.miApp.demo.initDashboardMenuChat();
//       $.miApp.demo.initThemeSettings();
//       $.miApp.actions.initWaitMe();
//   });
  </script>
  <script>
    @if(session('msg')) 
        toastr.success('{{session('msg')}}');
    @endif
  </script>

  @stack('scripts')
</body>

</html>