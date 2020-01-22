<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $avisos = Post::latest()->paginate();

        return view('pages.inicio.index', compact('avisos'));
    }
}
