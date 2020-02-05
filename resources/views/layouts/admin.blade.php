<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from www.materionic.com/demos/materionic-admin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jan 2020 04:32:38 GMT -->

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
  <!-- Fonts -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Styles -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
  <link href="{{ asset('fonts/material-icons/MaterialIcons-Regular.woff2') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/materionic.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">

  @stack('styles')
</head>

<body class="mi-theme-default mi-sidebar-fluid mi-sidebar-md mi-sidebar-dark">
  <!-- ============================================================== -->
  <!-- #Begin# Splash Screen -->
  <!-- ============================================================== -->
  {{-- <div class="mi-splash-screen">
    <div class="mi-atom">
      <div class="mi-electron"></div>
    </div>
  </div> --}}
  <!-- ============================================================== -->
  <!-- #End# Splash Screen -->
  <!-- ============================================================== -->

  @include('partials.admin._header')
  <!-- ============================================================== -->
  <!-- #Begin# Quick Sidebar -->
  <!-- ============================================================== -->
  <aside class="mi-quick-sidebar mi-menu-chat">
    <ul class="nav nav-tabs">
      <li class="active mi-tab-color-blue"><a href="#mi_chat_tab" data-toggle="tab"><i
            class="mi mi-icon_chat col-blue"></i></a></li>
      <li class="mi-tab-color-orange"><a href="#mi_activity_stream_tab" data-toggle="tab"><i
            class="mi mi-icon_history col-orange"></i></a></li>
      <li class="mi-tab-color-cyan"><a href="#mi_settings_tab" data-toggle="tab"><i
            class="mi mi-icon_settings col-cyan"></i></a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane fade in active" id="mi_chat_tab">
        <div class="mi-card mi-card-chat animate fadeIn" id="mi_chat_menu">
          <div class="mi-chat-item bg-blue">
            <div class="media">
              <div class="media-left">
                <span class="mi-chat-item-title">Chat</span>
              </div>
              <div class="media-right pull-right">
                <a href="javascript:void(0)" class="waves-effect" data-chat-close="true">
                  <i class="mi mi-icon_chat col-teal"></i>
                </a>
                <a href="javascript:void(0)" class="waves-effect m-r-5"
                  onclick="$('#mi_sidebar_menu_chat_input').parent().toggle(200)">
                  <i class="mi  mi-icon_search col-teal"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="mi-card-content padding-0">
            <div class="mi-chat-search-item" style="display:none">
              <input type="text" class="form-control border-radius-none" placeholder="Search..."
                id="mi_sidebar_menu_chat_input" autocomplete="off">
            </div>
            <div class="mi-chat-friend-list">
              <div class="waves-effect mi-chat-item">
                <div class="media">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../assets/images/users/matureman1.png">
                  </div>
                  <div class="media-body">
                    <span class="font-bold">Little Suz</span>
                    <br>
                    <div class="mi-chat-item-contet v-a-middle">
                      <i class="mi mi-icon_done_all col-light-blue v-a-middle"></i>
                      <span class="v-a-bottom">ulla vel metus scelerisque ante sollicitudin commodo</span>
                    </div>
                  </div>
                  <div class="media-right">
                    <span>10:25</span>
                    <span class="badge bg-green-400 pull-right">4</span>
                  </div>
                </div>
              </div>
              <div class="waves-effect mi-chat-item">
                <div class="media">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../assets/images/users/maturewoman.png">
                  </div>
                  <div class="media-body">
                    <span class="font-bold">Melissa Ben</span>
                    <br>
                    <div class="mi-chat-item-contet v-a-middle">
                      <i class="mi mi-icon_photo_camera col-blue-grey-400 v-a-middle"></i>
                      <span class="v-a-bottom">Cum sociis natoque penatibus</span>
                    </div>
                  </div>
                  <div class="media-right">
                    <span>09:15</span>
                  </div>
                </div>
              </div>
              <div class="waves-effect mi-chat-item">
                <div class="media">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../assets/images/users/boy.png">
                  </div>
                  <div class="media-body">
                    <span class="font-bold">John Doe </span>
                    <br>
                    <div class="mi-chat-item-contet v-a-middle">
                      <i class="mi mi-icon_done col-light-blue v-a-middle"></i>
                      <span class="v-a-bottom">Nulla vel metus scelerisque ante sollicitudin commodo</span>
                    </div>
                  </div>
                  <div class="media-right">
                    <span>08:49</span>
                  </div>
                </div>
              </div>
              <div class="waves-effect mi-chat-item">
                <div class="media">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../assets/images/users/supportfemale.png">
                  </div>
                  <div class="media-body">
                    <span class="font-bold">Little Suz</span>
                    <br>
                    <div class="mi-chat-item-contet v-a-middle">
                      <i class="mi mi-icon_done_all col-light-blue v-a-middle"></i>
                      <span class="v-a-bottom">Fusce condimentum nunc</span>
                    </div>
                  </div>
                  <div class="media-right">
                    <span>07:16</span>
                    <span class="badge bg-green-400 pull-right">1</span>
                  </div>
                </div>
              </div>
              <div class="waves-effect mi-chat-item">
                <div class="media">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../assets/images/users/female.png">
                  </div>
                  <div class="media-body">
                    <span class="font-bold">Melissa Ben</span>
                    <br>
                    <div class="mi-chat-item-contet v-a-middle">
                      <i class="mi mi-icon_place col-blue-grey-400 v-a-middle"></i>
                      <span class="v-a-bottom">Cum sociis natoque penatibus</span>
                    </div>
                  </div>
                  <div class="media-right">
                    <span>Saturday</span>
                  </div>
                </div>
              </div>
              <div class="waves-effect mi-chat-item">
                <div class="media">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../assets/images/users/boy.png">
                  </div>
                  <div class="media-body">
                    <span class="font-bold">John Doe </span>
                    <br>
                    <div class="mi-chat-item-contet v-a-middle">
                      <span class="v-a-bottom">Nulla vel metus scelerisque ante sollicitudin commodo</span>
                    </div>
                  </div>
                  <div class="media-right">
                    <span>Monday</span>
                    <span class="badge bg-green-400 pull-right">8</span>
                  </div>
                </div>
              </div>
              <div class="waves-effect mi-chat-item">
                <div class="media">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../assets/images/users/matureman2.png">
                  </div>
                  <div class="media-body">
                    <span class="font-bold">Little Suz</span>
                    <br>
                    <div class="mi-chat-item-contet v-a-middle">
                      <span class="v-a-bottom">Fusce condimentum nunc</span>
                    </div>
                  </div>
                  <div class="media-right">
                    <span>Saturday</span>
                  </div>
                </div>
              </div>
              <div class="waves-effect mi-chat-item">
                <div class="media">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../assets/images/users/maturewoman.png">
                  </div>
                  <div class="media-body">
                    <span class="font-bold">Melissa Ben</span>
                    <br>
                    <div class="mi-chat-item-contet v-a-middle">
                      <i class="mi mi-icon_file_download col-blue-grey-400 v-a-middle"></i>
                      <span class="v-a-bottom">Nulla vel metus scelerisque ante sollicitudin commodo</span>
                    </div>
                  </div>
                  <div class="media-right">
                    <span>Thursday</span>
                  </div>
                </div>
              </div>
              <div class="waves-effect mi-chat-item">
                <div class="media">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../assets/images/users/boy.png">
                  </div>
                  <div class="media-body">
                    <span class="font-bold">John Doe </span>
                    <br>
                    <div class="mi-chat-item-contet v-a-middle">
                      <span class="v-a-bottom">Cum sociis natoque penatibus</span>
                    </div>
                  </div>
                  <div class="media-right">
                    <span>Thursday</span>
                  </div>
                </div>
              </div>
              <div class="waves-effect mi-chat-item">
                <div class="media">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../assets/images/users/supportfemale.png">
                  </div>
                  <div class="media-body">
                    <span class="font-bold">Little Suz</span>
                    <br>
                    <div class="mi-chat-item-contet v-a-middle">
                      <i class="mi mi-icon_photo_camera col-blue-grey-400 v-a-middle"></i>
                      <span class="v-a-bottom">Fusce condimentum nunc</span>
                    </div>
                  </div>
                  <div class="media-right">
                    <span>Monday</span>
                    <span class="badge bg-green-400 pull-right">5</span>
                  </div>
                </div>
              </div>
              <div class="waves-effect mi-chat-item">
                <div class="media">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../assets/images/users/female.png">
                  </div>
                  <div class="media-body">
                    <span class="font-bold">Melissa Ben</span>
                    <br>
                    <div class="mi-chat-item-contet v-a-middle">
                      <i class="mi mi-icon_photo_camera col-blue-grey-400 v-a-middle"></i>
                      <span class="v-a-bottom">Nulla vel metus scelerisque ante sollicitudin commodo</span>
                    </div>
                  </div>
                  <div class="media-right">
                    <span>Saturday</span>
                    <span class="badge bg-green-400 pull-right">2</span>
                  </div>
                </div>
              </div>
              <div class="waves-effect mi-chat-item">
                <div class="media">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../assets/images/users/boy.png">
                  </div>
                  <div class="media-body">
                    <span class="font-bold">John Doe </span>
                    <br>
                    <div class="mi-chat-item-contet v-a-middle">
                      <i class="mi mi-icon_place col-blue-grey-400 v-a-middle"></i>
                      <span class="v-a-bottom">Cum sociis natoque penatibus</span>
                    </div>
                  </div>
                  <div class="media-right">
                    <span>Friday</span>
                    <span class="badge bg-green-400 pull-right">4</span>
                  </div>
                </div>
              </div>
              <div class="waves-effect mi-chat-item">
                <div class="media">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../assets/images/users/matureman2.png">
                  </div>
                  <div class="media-body">
                    <span class="font-bold">Little Suz</span>
                    <br>
                    <div class="mi-chat-item-contet v-a-middle">
                      <span class="v-a-bottom">Nulla vel metus scelerisque ante sollicitudin commodo</span>
                    </div>
                  </div>
                  <div class="media-right">
                    <span>Wednesday</span>
                  </div>
                </div>
              </div>
              <div class="waves-effect mi-chat-item">
                <div class="media">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../assets/images/users/female.png">
                  </div>
                  <div class="media-body">
                    <span class="font-bold">Melissa Ben</span>
                    <br>
                    <div class="mi-chat-item-contet v-a-middle">
                      <i class="mi mi-icon_place col-blue-grey-400 v-a-middle"></i>
                      <span class="v-a-bottom">Fusce condimentum nunc</span>
                    </div>
                  </div>
                  <div class="media-right">
                    <span>Saturday</span>
                  </div>
                </div>
              </div>
              <div class="waves-effect mi-chat-item">
                <div class="media">
                  <div class="media-left">
                    <img class="media-object img-circle" src="../assets/images/users/boy.png">
                  </div>
                  <div class="media-body">
                    <span class="font-bold">John Doe </span>
                    <br>
                    <div class="mi-chat-item-contet v-a-middle">
                      <span class="v-a-bottom">Nulla vel metus scelerisque ante sollicitudin commodo</span>
                    </div>
                  </div>
                  <div class="media-right">
                    <span>Sunday</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="mi_activity_stream_tab">
        <div class="mi-card">
          <div class="mi-card-header bg-orange">
            <div class="mi-title">Activity Stream</div>
            <ul class="mi-card-header-tools">
              <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle waves-circle" data-toggle="dropdown">
                  <i class="mi mi-icon_more_vert"></i>
                </a>
                <ul class="dropdown-menu pull-right">
                  <li><a href="javascript:void(0);" class="waves-effect waves-block">New Task</a></li>
                  <li><a href="javascript:void(0);" class="waves-effect waves-block">Support</a></li>
                  <li><a href="javascript:void(0);" class="waves-effect waves-block">New Task</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="mi-card-content">
            <ul class="mi-basic-timeline">
              <li class="mi-basic-timeline-item">
                <div class="mi-basic-timeline-step">
                  <div class="mi-basic-timeline-step-marker brd-col-pink"></div>
                </div>
                <div class="mi-basic-timeline-time">
                  09:00
                </div>
                <div class="mi-basic-timeline-content">
                  <div class="mi-basic-timeline-title">
                    Nulla vel metus scelerisque ante sollicitudin commodosollicitudin commodo.
                  </div>
                  <ul class="mi-basic-timeline-points">
                    <li>commodo</li>
                  </ul>
                </div>
              </li>
              <li class="mi-basic-timeline-item">
                <div class="mi-basic-timeline-step">
                  <div class="mi-basic-timeline-step-marker brd-col-blue"></div>
                </div>
                <div class="mi-basic-timeline-time">
                  10:00
                </div>
                <div class="mi-basic-timeline-content">
                  <div class="mi-basic-timeline-title">
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                  </div>
                </div>
              </li>
              <li class="mi-basic-timeline-item">
                <div class="mi-basic-timeline-step">
                  <div class="mi-basic-timeline-step-marker brd-col-orange"></div>
                </div>
                <div class="mi-basic-timeline-time">
                  12:00
                </div>
                <div class="mi-basic-timeline-content">
                  <div class="mi-basic-timeline-title font-bold">
                    Donec sed odio dui.
                  </div>
                </div>
              </li>
              <li class="mi-basic-timeline-item">
                <div class="mi-basic-timeline-step">
                  <div class="mi-basic-timeline-step-marker brd-col-purple"></div>
                </div>
                <div class="mi-basic-timeline-time">
                  13:00
                </div>
                <div class="mi-basic-timeline-content">
                  <div class="mi-basic-timeline-title">
                    Fusce condimentum nunc ac nisi vulputate fringilla.
                  </div>
                  <ul class="mi-basic-timeline-points">
                    <li>vulputate</li>
                  </ul>
                </div>
              </li>
              <li class="mi-basic-timeline-item">
                <div class="mi-basic-timeline-step">
                  <div class="mi-basic-timeline-step-marker brd-col-pink"></div>
                </div>
                <div class="mi-basic-timeline-time">
                  09:00
                </div>
                <div class="mi-basic-timeline-content">
                  <div class="mi-basic-timeline-title">
                    Nulla vel metus scelerisque ante sollicitudin commodosollicitudin commodo.
                  </div>
                  <ul class="mi-basic-timeline-points">
                    <li>commodo</li>
                    <li>ante</li>
                  </ul>
                </div>
              </li>
              <li class="mi-basic-timeline-item">
                <div class="mi-basic-timeline-step">
                  <div class="mi-basic-timeline-step-marker brd-col-blue"></div>
                </div>
                <div class="mi-basic-timeline-time">
                  10:00
                </div>
                <div class="mi-basic-timeline-content">
                  <div class="mi-basic-timeline-title">
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                  </div>
                </div>
              </li>
              <li class="mi-basic-timeline-item">
                <div class="mi-basic-timeline-step">
                  <div class="mi-basic-timeline-step-marker brd-col-orange"></div>
                </div>
                <div class="mi-basic-timeline-time">
                  12:00
                </div>
                <div class="mi-basic-timeline-content">
                  <div class="mi-basic-timeline-title font-bold">
                    Donec sed odio dui.
                  </div>
                </div>
              </li>
              <li class="mi-basic-timeline-item">
                <div class="mi-basic-timeline-step">
                  <div class="mi-basic-timeline-step-marker brd-col-purple"></div>
                </div>
                <div class="mi-basic-timeline-time">
                  13:00
                </div>
                <div class="mi-basic-timeline-content">
                  <div class="mi-basic-timeline-title">
                    Fusce condimentum nunc ac nisi vulputate fringilla.
                  </div>
                  <ul class="mi-basic-timeline-points">
                    <li>vulputate</li>
                  </ul>
                </div>
              </li>
              <li class="mi-basic-timeline-item">
                <div class="mi-basic-timeline-step">
                  <div class="mi-basic-timeline-step-marker brd-col-green"></div>
                </div>
                <div class="mi-basic-timeline-time">
                  13:00
                </div>
                <div class="mi-basic-timeline-content">
                  <div class="mi-basic-timeline-title">
                    <b class="col-green"> Donec lacinia congue felis in faucibus.</b>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="mi_settings_tab">
        <div class="mi-card mi-card-settings">
          <div class="mi-card-header bg-cyan">
            <div class="mi-title">Settings</div>
            <ul class="mi-card-header-tools">
              <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle waves-circle" data-toggle="dropdown">
                  <i class="mi mi-icon_more_vert"></i>
                </a>
                <ul class="dropdown-menu pull-right">
                  <li><a href="javascript:void(0);" class="waves-effect waves-block">New Task</a></li>
                  <li><a href="javascript:void(0);" class="waves-effect waves-block">Support</a></li>
                  <li><a href="javascript:void(0);" class="waves-effect waves-block">New Task</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="mi-card-content">
            <h5 class="border-bottom">General Settings</h5>
            <div class="media">
              <div class="media-body">
                <span class="mi-media-title">Email Alerts</span>
              </div>
              <div class="media-right">
                <div class="mi-switch">
                  <label><input type="checkbox" checked=""><span class="bg-cyan"></span></label>
                </div>
              </div>
            </div>
            <div class="media">
              <div class="media-body">
                <span class="mi-media-title">SMS Alerts</span>
              </div>
              <div class="media-right">
                <div class="mi-switch">
                  <label><input type="checkbox"><span class="bg-cyan"></span></label>
                </div>
              </div>
            </div>
            <div class="media">
              <div class="media-body">
                <span class="mi-media-title">Push Notifications</span>
              </div>
              <div class="media-right">
                <div class="mi-switch">
                  <label><input type="checkbox" checked=""><span class="bg-cyan"></span></label>
                </div>
              </div>
            </div>
            <div class="media">
              <div class="media-body">
                <span class="mi-media-title">Data Sync</span>
              </div>
              <div class="media-right">
                <div class="mi-switch">
                  <label><input type="checkbox" checked=""><span class="bg-cyan"></span></label>
                </div>
              </div>
            </div>
            <div class="media">
              <div class="media-left">
                <spam>Email Notifications</spam>
              </div>
              <div class="media-right">

              </div>
            </div>
            <h5 class="border-bottom border-top">System Settings</h5>
            <div class="media">
              <div class="media-body">
                <span class="mi-media-title">Auto Backup</span>
              </div>
              <div class="media-right">
                <div class="mi-switch">
                  <label><input type="checkbox"><span class="bg-purple"></span></label>
                </div>
              </div>
            </div>
            <div class="media">
              <div class="media-body">
                <span class="mi-media-title">Daily Logs</span>
              </div>
              <div class="media-right">
                <div class="mi-switch">
                  <label><input type="checkbox" checked=""><span class="bg-purple"></span></label>
                </div>
              </div>
            </div>
            <div class="media">
              <div class="media-body">
                <span class="mi-media-title">CPU Alerts</span>
              </div>
              <div class="media-right">
                <div class="mi-switch">
                  <label><input type="checkbox" checked=""><span class="bg-purple"></span></label>
                </div>
              </div>
            </div>
            <div class="media">
              <div class="media-body">
                <span class="mi-media-title">Bug Reportings</span>
              </div>
              <div class="media-right">
                <div class="mi-switch">
                  <label><input type="checkbox"><span class="bg-purple"></span></label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mi-chat-box bg-blue animate fadeIn hidden" id="mi_chat_box">
      <div class="mi-chat-box-title">
        <h1>John Doe</h1>
        <div class="mi-chat-box-avatar">
          <img src="../assets/images/users/boy.png">
        </div>
        <div class="mi-chat-box-actions">
          <a href="javascript:void(0);" data-chat-close="true" class="waves-effect"><i class="mi mi-icon_close"></i></a>
        </div>
      </div>
      <div class="mi-chat-box-messages">
        <div class="mi-chat-box-messages-content"></div>
      </div>
      <div class="mi-chat-box-message-box">
        <textarea type="text" class="mi-chat-box-message-input" placeholder="Type a message..."></textarea>
        <div class="mi-chat-box-footer">
          <a href="javascript:void(0);"><i class="mi mi-icon_photo_library"></i></a>
          <a href="javascript:void(0);"><i class="mi mi-icon_mood"></i></a>
          <a href="javascript:void(0);"><i class="mi mi-icon_gif"></i></a>
          <a href="javascript:void(0);"><i class="mi mi-icon_attach_file"></i></a>
          <a href="javascript:void(0);"><i class="mi mi-icon_videogame_asset"></i></a>
          <a href="javascript:void(0);" class="pull-right"><i class="mi mi-icon_thumb_up col-blue"></i></a>
        </div>
      </div>
    </div>
  </aside>
  <!-- ============================================================== -->
  <!-- #End# Quick Sidebar -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- #Begin# Page Content-->
  <!-- ============================================================== -->
  <section class="mi-content">
    @yield('content-header')
    @yield('content')
  </section>
  <!-- ============================================================== -->
  <!-- #End# Page Content-->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- #Begin# Footer -->
  <!-- ============================================================== -->
  {{-- <footer class="mi-footer clearfix mi-footer-fixed padding-5">
    <div class="col-md-11 m-t-10">
      &copy; {{ date('Y') }} <a href="https://creativemarket.com/ercanayhan?u=ercanayhan"><b
      class="col-light-blue-900">Ercan
      Ayhan</b></a>
  </div>
  </footer> --}}
  <!-- ============================================================== -->
  <!-- #End# Footer -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- #Begin# Theme Settings -->
  <!-- ============================================================== -->

  <!-- ============================================================== -->
  <!-- #End# Theme Settings -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Feedback -->
  <!-- ============================================================== -->

  <!-- Plugins -->
  <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
  {{-- <script src="{{ asset('vendors/jquery.nicescroll/jquery.nicescroll.min.js') }}"></script> --}}
  <link href="{{ asset('vendors/waitme/waitMe.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('vendors/kendo-ui-core/kendo.common-material.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('vendors/kendo-ui-core/kendo.material.min.css') }}" rel="stylesheet" />
  <script src="{{ asset('vendors/kendo-ui-core/kendo.ui.core.min.js') }}"></script>
  <script src="{{ asset('vendors/bootstrap-growl/bootstrap-growl.js') }}"></script>
  <script src="{{ asset('vendors/jquery-searchable/jquery.searchable-1.0.0.min.js') }}"></script>
  <script src="{{ asset('vendors/waitme/waitMe.min.js') }}"></script>
  <script src="{{ asset('vendors/node-waves/waves.min.js') }}"></script>
  <script src="{{ asset('vendors/chartjs/chart.min.js') }}"></script>
  <script src="{{ asset('vendors/chartjs/utils.js') }}"></script>
  <link href="{{ asset('vendors/dropzone/min/dropzone.min.css') }}" rel="stylesheet" />
  <script src="{{ asset('vendors/dropzone/min/dropzone.min.js') }}"></script>
  <link href="{{ asset('vendors/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
  <script src="{{ asset('vendors/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
  <script src="{{ asset('vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <script src="{{ asset('vendors/jquery-knob/jquery.knob.min.js') }}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

  <!-- Materionic JS -->
  <script src="{{ asset('js/materionic.js') }}"></script>
  <script src="{{ asset('js/app.demo.js') }}"></script>
  <script>
    $(window).load(function () {
      $.miApp.demo.initDashboard();
      $.miApp.demo.initDashboardMenuChat();
      $.miApp.demo.initThemeSettings();
      $.miApp.actions.initWaitMe();
    });
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
  </script>

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

<!-- Mirrored from www.materionic.com/demos/materionic-admin/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jan 2020 04:34:42 GMT -->

</html>