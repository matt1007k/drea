<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperiorController extends Controller
{
    public function index()
    {
        return view('pages.superior.index');
    }
}
