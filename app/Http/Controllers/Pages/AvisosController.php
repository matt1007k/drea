<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class AvisosController extends Controller
{
    public function index()
    {
        $avisos = Post::orderBy('fecha', 'DESC')->paginate(10);
        return view('pages.avisos.index', compact('avisos'));
    }

    public function show(Post $aviso)
    {
        return view('pages.avisos.show', compact('aviso'));
    }
}
