<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Post;
use App\Http\Requests\PostCreatedRequest;

class PostsController extends Controller
{
    public function index()
    {
        $search = request('search') ? request('search') : '';

        if ($search != '') {
            $posts = Post::search($search)->orderBy('fecha', 'DESC')->get();
        } else {
            $posts = Post::orderBy('fecha', 'DESC')->get();
        }

        return view(
            'admin.posts.index',
            compact(
                'posts',
                'search'
            )
        );
    }

    public function create()
    {
        $post = new Post([
            'fecha' => Carbon::now()
        ]);
        return view('admin.posts.create', compact('post'));
    }

    public function store(PostCreatedRequest $request)
    {
        Post::create([
            'titulo' => request('titulo'),
            'contenido' => request('contenido'),
            'fecha' => Carbon::parse(request('fecha')),
        ]);
        return redirect()->route('admin.posts.index')
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function show(Post $post)
    {
        $aviso = $post;
        return view('admin.posts.show', compact('aviso'));
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(PostCreatedRequest $request, Post $post)
    {
        $post->update([
            'titulo' => request('titulo'),
            'contenido' => request('contenido'),
            'fecha' => Carbon::parse((string) request('fecha')),
        ]);
        return redirect()->route('admin.posts.index')
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')
            ->with('msg', 'El registro se eliminó correctamente');
    }
}
