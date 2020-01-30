<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AlbumCreatedRequest;
use App\Http\Requests\AlbumUpdatedRequest;

class AlbumesController extends Controller
{
    public function index()
    {
        $search = request('search') ? request('search') : '';

        if ($search != '') {
            $albums = Album::search($search)->orderBy('fecha', 'DESC')->get();
        } else {
            $albums = Album::orderBy('fecha', 'DESC')->get();
        }

        return view(
            'admin.albums.index',
            compact(
                'albums',
                'search'
            )
        );
    }

    public function create()
    {
        $album = new Album(['fecha' => now()]);
        return view('admin.albums.create', compact('album'));
    }

    public function store(AlbumCreatedRequest $request)
    {
        Album::create([
            'titulo' => request('titulo'),
            'descripcion' => request('descripcion'),
            'imagen' => request()->file('imagen')->store('albumes', 'public'),
            'fecha' => Carbon::parse(request('fecha')),
            'publicado' => request('publicado') ? true : false,
        ]);

        return redirect()->route('admin.albums.index')
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function show(Album $album)
    {
        return view('admin.albums.show', compact('album'));
    }

    public function edit(Album $album)
    {
        return view('admin.albums.edit', compact('album'));
    }

    public function update(AlbumUpdatedRequest $request, Album $album)
    {
        if ($request->file('imagen')) {
            $imagen = $request->file('imagen')->store('albumes', 'public');
            $exists = Storage::disk('public')->exists($album->imagen);
            if ($exists) {
                Storage::disk('public')->delete($album->imagen);
            }
        } else {
            $imagen = $album->imagen;
        }
        $album->update([
            'titulo' => request('titulo'),
            'descripcion' => request('descripcion'),
            'imagen' => $imagen,
            'fecha' => Carbon::parse(request('fecha')),
            'publicado' => request('publicado') ? true : false,
        ]);

        return redirect()->route('admin.albums.index')
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(Album $album)
    {
        $album->delete();
        Storage::disk('public')->delete($album->imagen);
        return redirect()->route('admin.albums.index')
            ->with('msg', 'El registro se eliminó correctamente');
    }
}
