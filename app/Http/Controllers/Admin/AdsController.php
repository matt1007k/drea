<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Models\Ad;

class AdsController extends Controller
{
  public function create(){
    $ad = new Ad();
    return view('admin.ads.create', compact('ad');
  }
}
