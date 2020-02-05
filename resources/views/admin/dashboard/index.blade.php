@extends('layouts.admin')

@section('title', 'Tablero de resumen')

@section('content-header')
<div class="mi-content-header">
  <div class="mi-title">
    <span>Dashboard</span>
  </div>
  <ul class="mi-card-header-tools mi-card-header-filters">
    <li class="dropdown">
      <a href="javascript:void(0);" class="dropdown-toggle waves-effect" data-toggle="dropdown">
        <span class="v-a-middle">Today</span>
        <i class="mi mi-icon_keyboard_arrow_down v-a-middle"></i>
      </a>
      <div class="dropdown-menu pull-right">
        <div class="mi-card">
          <div class="mi-card-content mi-menu-list">
            <a href="javascript:void(0);" class="list-group-item waves-effect">Today</a>
            <a href="javascript:void(0);" class="list-group-item waves-effect">Yesterday</a>
            <a href="javascript:void(0);" class="list-group-item waves-effect">This Week</a>
            <a href="javascript:void(0);" class="list-group-item waves-effect">Last Week</a>
            <a href="javascript:void(0);" class="list-group-item waves-effect">This Month</a>
            <a href="javascript:void(0);" class="list-group-item waves-effect">Last Month</a>
          </div>
          <div class="mi-card-footer bg-white">
            <div class="input-group m-b-0">
              <div class="mi-input">
                <input value="01/01/2018" class="form-control datepicker">
              </div>
            </div>
            <div class="input-group m-b-5">
              <div class="mi-input">
                <input value="01/01/2018" class="form-control datepicker">
              </div>
            </div>
            <a href="javascript:void(0)" class="btn bg-red waves-effect pull-left">Cancel</a>
            <a href="javascript:void(0)" class="btn bg-cyan waves-effect pull-right">Apply</a>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
@endsection

@section('content')

<!-- ============================================================== -->
<!-- Stats -->
<!-- ============================================================== -->
<div class="row clearfix">
  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="mi-card-visual bg-light-blue zoomIn">
      <div class="mi-visual-bar">
        <i class="mi mi-icon_web"></i>
      </div>
      <div class="mi-visual-content">
        <div class="mi-visual-title">Visits Today</div>
        <div class="mi-visual-data">21740</div>
      </div>
    </div>
  </div>
  <!---->
  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="mi-card-visual bg-red zoomIn">
      <div class="mi-visual-bar">
        <i class="mi mi-icon_group_add"></i>
      </div>
      <div class="mi-visual-content">
        <div class="mi-visual-title">New Users</div>
        <div class="mi-visual-data">742</div>
      </div>
    </div>
  </div>
  <!---->
  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="mi-card-visual bg-orange zoomIn">
      <div class="mi-visual-bar">
        <i class="mi mi-icon_shopping_cart"></i>
      </div>
      <div class="mi-visual-content">
        <div class="mi-visual-title">New Orders</div>
        <div class="mi-visual-data">954</div>
      </div>
    </div>
  </div>
  <!---->
  <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="mi-card-visual bg-green zoomIn">
      <div class="mi-visual-bar">
        <i class="mi mi-icon_shopping_basket"></i>
      </div>
      <div class="mi-visual-content">
        <div class="mi-visual-title">Total Sales</div>
        <div class="mi-visual-data">$3540</div>
      </div>
    </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- Stats -->
<!-- ============================================================== -->
</div>
@endsection