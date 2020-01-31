<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PhotoCreatedRequest;
use App\Http\Requests\PhotoUpdatedRequest;
use App\Models\Album;
use App\Models\Photo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotosController extends Controller
{
    public function index()
    {
        $album = request('album') ? request('album') : 'todos';
        $search = request('search') ? request('search') : '';

        if ($album == 'todos') {
            if ($search != '') {
                $photos = Photo::with('album')
                    ->search($search)->latest()->get();
            } else {
                $photos = Photo::with('album')->latest()->get();
            }
        } elseif ($album != 'todos') {
            if ($search != '') {
                $photos = Photo::with('album')
                    ->byAlbum($album)->search($search)->latest()->get();
            } else {
                $photos = Photo::with('album')->byAlbum($album)
                    ->latest()->get();
            }
        }
        $albums = Album::orderBy('titulo', 'ASC')->get();
        return view(
            'admin.photos.index',
            compact(
                'photos',
                'album',
                'albums',
                'search'
            )
        );
    }

    public function create()
    {
        $photo = new Photo();
        $albums = Album::orderBy('titulo', 'ASC')->get();
        return view('admin.photos.create', compact('photo', 'albums'));
    }


    public function store(PhotoCreatedRequest $request)
    {
        Photo::create([
            'titulo' => request('titulo'),
            'album_id' => request('album_id'),
            'imagen' => request()->file('imagen')->store('photos', 'public'),
            'fecha' => Carbon::parse(request('fecha')),
            'publicado' => request('publicado') ? true : false,
        ]);

        return redirect()->route('admin.photos.index')
            ->with('msg', 'El registro se guardó correctamente');
    }


    public function show(Photo $photo)
    {
        return view('admin.photos.show', compact('photo'));
    }

    public function edit(Photo $photo)
    {
        $albums = Album::orderBy('titulo', 'ASC')->get();
        return view('admin.photos.edit', compact('photo', 'albums'));
    }

    public function update(PhotoUpdatedRequest $request, Photo $photo)
    {
        $photo->update([
            'titulo' => request('titulo'),
            'album_id' => request('album_id'),
            'imagen' => $photo->getImagenUpdated(),
            'fecha' => Carbon::parse(request('fecha')),
            'publicado' => request('publicado') ? true : false,
        ]);

        return redirect()->route('admin.photos.index')
            ->with('msg', 'El registro se editó correctamente');
    }


    public function destroy(Photo $photo)
    {
        $photo->deletePhoto();

        return redirect()->route('admin.photos.index')
            ->with('msg', 'El registro se eliminó correctamente');
    }
}
