<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\VideoCreatedRequest;
use App\Models\Video;
use Carbon\Carbon;

class VideosController extends Controller
{
    public function index()
    {
        $search = request('search') ? request('search') : '';

        if ($search != '') {
            $videos = Video::search($search)->latest()->get();
        } else {
            $videos = Video::latest()->get();
        }

        return view(
            'admin.videos.index',
            compact(
                'videos',
                'search'
            )
        );
    }

    public function show(Video $video)
    {
        return view('admin.videos.show', compact('video'));
    }

    public function create()
    {
        $video = new Video(['fecha' => now()]);
        return view('admin.videos.create', compact('video'));
    }

    public function store(VideoCreatedRequest $request)
    {
        Video::create([
            'titulo' => request('titulo'),
            'video' => request('video'),
            'fecha' => Carbon::parse(request('fecha')),
            'publicado' => request('publicado') ? true : false,
        ]);

        return redirect()->route('admin.videos.index')
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    public function update(VideoCreatedRequest $request, Video $video)
    {
        $video->update([
            'titulo' => request('titulo'),
            'video' => request('video'),
            'fecha' => Carbon::parse(request('fecha')),
            'publicado' => request('publicado') ? true : false,
        ]);

        return redirect()->route('admin.videos.index')
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('admin.videos.index')
            ->with('msg', 'El registro se eliminó correctamente');
    }
}
