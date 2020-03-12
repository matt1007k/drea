<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SlideshowCreatedRequest;
use App\Http\Requests\SlideshowUpdatedRequest;
use App\Models\Slideshow;
use Carbon\Carbon;

class SlideshowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:slideshows.lista')->only(['index']);
        $this->middleware('can:slideshows.ver')->only(['show']);
        $this->middleware('can:slideshows.registrar')->only(['create', 'store']);
        $this->middleware('can:slideshows.editar')->only(['edit', 'update']);
        $this->middleware('can:slideshows.eliminar')->only(['destroy']);
    }

    public function index()
    {
        $search = request('search') ? request('search') : '';

        if ($search != '') {
            $slideshows = Slideshow::search($search)->orderLatestDate()->get();
        } else {
            $slideshows = Slideshow::orderLatestDate()->get();
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
            'url' => request('url'),
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
            'url' => request('url'),
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
