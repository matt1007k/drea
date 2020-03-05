<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdsCreatedRequest;
use App\Http\Requests\AdsUpdatedRequest;
use App\Models\Ad;

class AdsController extends Controller
{
    public function index()
    {
        $ads = Ad::all();
        return view('admin.ads.index', compact('ads'));
    }
    public function create()
    {
        $ad = new Ad();
        return view('admin.ads.create', compact('ad'));
    }

    public function store(AdsCreatedRequest $request)
    {
        Ad::create([
            'titulo' => $request->get('titulo'),
            'url' => $request->get('url'),
            'imagen' => $request->file('imagen')->store('ads', 'public'),
            'publicado' => request('publicado') ? true : false,
        ]);

        return redirect()->route('admin.ads.index')
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function show(Ad $ad)
    {
        return view('admin.ads.show', compact('ad'));
    }

    public function edit(Ad $ad)
    {
        return view('admin.ads.edit', compact('ad'));
    }

    public function update(AdsUpdatedRequest $request, Ad $ad)
    {
        $ad->update([
            'titulo' => request('titulo'),
            'url' => request('url'),
            'imagen' => $ad->getImagenUpdated(),
            'publicado' => request('publicado') ? true : false,
        ]);

        return redirect()->route('admin.ads.index')
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(Ad $ad)
    {
        $ad->deleteAd();

        return redirect()->route('admin.ads.index')
            ->with('msg', 'El registro se eliminó correctamente');
    }
}
