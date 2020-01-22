<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function create()
    {
        $post = new Post();
        return view('admin.posts.create', compact('post'));
    }

    public function store()
    {
        // return Carbon::parse(request('fecha'));
        Post::create([
            'titulo' => request('titulo'),
            'contenido' => request('contenido'),
            'fecha' => Carbon::parse(request('fecha')),
        ]);
        return redirect()->route('admin.index')
            ->with('msg', 'Registro completado');
    }
}
