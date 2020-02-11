<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Slideshow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SlideshowCreatedRequest;
use App\Http\Requests\SlideshowUpdatedRequest;

class SlideshowsController extends Controller
{
    public function index()
    {
        $search = request('search') ? request('search') : '';

        if ($search != '') {
            $slideshows = Slideshow::search($search)->orderBy('fecha', 'DESC')->get();
        } else {
            $slideshows = Slideshow::orderBy('fecha', 'DESC')->get();
        }

        return view(
            'admin.slideshows.index',
            compact(
                'slideshows',
                'search'
            )
        );
    }

    public function create()
    {
        $slideshow = new Slideshow(['fecha' => now()]);
        return view('admin.slideshows.create', compact('slideshow'));
    }

    public function store(SlideshowCreatedRequest $request)
    {
        Slideshow::create([
            'titulo' => request('titulo'),
            'descripcion' => request('descripcion'),
            'imagen' => request()->file('imagen')->store('slideshows', 'public'),
            'fecha' => Carbon::parse(request('fecha')),
            'publicado' => request('publicado') ? true : false,
        ]);

        return redirect()->route('admin.slideshows.index')
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function show(Slideshow $slideshow)
    {
        return view('admin.slideshows.show', compact('slideshow'));
    }

    public function edit(Slideshow $slideshow)
    {
        return view('admin.slideshows.edit', compact('slideshow'));
    }

    public function update(SlideshowUpdatedRequest $request, Slideshow $slideshow)
    {
        $slideshow->update([
            'titulo' => request('titulo'),
            'descripcion' => request('descripcion'),
            'imagen' => $slideshow->getImagenUpdated(),
            'fecha' => Carbon::parse(request('fecha')),
            'publicado' => request('publicado') ? true : false,
        ]);

        return redirect()->route('admin.slideshows.index')
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(Slideshow $slideshow)
    {
        $slideshow->deleteSlideshow();

        return redirect()->route('admin.slideshows.index')
            ->with('msg', 'El registro se eliminó correctamente');
    }
}
