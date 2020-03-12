<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ExternalLinkCreatedRequest;
use App\Http\Requests\ExternalLinkUpdatedRequest;
use App\Models\ExternalLink;

class ExternalLinksController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:enlaces.externos.lista')->only(['index']);
        $this->middleware('can:enlaces.externos.ver')->only(['show']);
        $this->middleware('can:enlaces.externos.registrar')->only(['create', 'store']);
        $this->middleware('can:enlaces.externos.editar')->only(['edit', 'update']);
        $this->middleware('can:enlaces.externos.eliminar')->only(['destroy']);
    }

    public function index()
    {
        $search = request('search') ? request('search') : '';

        if ($search != '') {
            $external_links = ExternalLink::search($search)->latest()->get();
        } else {
            $external_links = ExternalLink::latest()->get();
        }

        return view(
            'admin.external_links.index',
            compact(
                'external_links',
                'search'
            )
        );
    }

    public function show(ExternalLink $external_link)
    {
        return view('admin.external_links.show', compact('external_link'));
    }

    public function create()
    {
        $external_link = new ExternalLink();
        return view('admin.external_links.create', compact('external_link'));
    }

    public function store(ExternalLinkCreatedRequest $request)
    {
        ExternalLink::create([
            'url' => request('url'),
            'imagen' => request()->file('imagen')->store('external_links', 'public'),
            'orden' => request('orden'),
            'publicado' => request('publicado') ? true : false,
        ]);

        return redirect()->route('admin.external_links.index')
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function edit(ExternalLink $external_link)
    {
        return view('admin.external_links.edit', compact('external_link'));
    }

    public function update(ExternalLinkUpdatedRequest $request, ExternalLink $external_link)
    {
        $external_link->update([
            'url' => request('url'),
            'imagen' => $external_link->getImagenUpdated(),
            'orden' => request('orden'),
            'publicado' => request('publicado') ? true : false,
        ]);

        return redirect()->route('admin.external_links.index')
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(ExternalLink $external_link)
    {
        $external_link->deleteExternalLink();

        return redirect()->route('admin.external_links.index')
            ->with('msg', 'El registro se eliminó correctamente');
    }
}
