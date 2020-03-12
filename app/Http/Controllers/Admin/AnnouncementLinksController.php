<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AnnouncementLinkCreatedRequest;
use App\Models\Announcement;
use App\Models\AnnouncementLink;
use Carbon\Carbon;

class AnnouncementLinksController extends Controller
{
    public function __construct()
    {
        // $this->middleware('can:cv.enlaces.lista')->only(['index']);
        // $this->middleware('can:cv.enlaces.ver')->only(['show']);
        $this->middleware('can:cv.enlaces.registrar')->only(['create', 'store']);
        $this->middleware('can:cv.enlaces.editar')->only(['edit', 'update']);
        $this->middleware('can:cv.enlaces.eliminar')->only(['destroy']);
    }

    public function create(Announcement $announcement)
    {
        $link = new AnnouncementLink(['fecha' => now()]);
        return view('admin.announcement_links.create', compact('link', 'announcement'));
    }

    public function store(AnnouncementLinkCreatedRequest $request, Announcement $announcement)
    {
        $announcement->links()->create([
            'titulo' => request('titulo'),
            'url' => request('url'),
            'fecha' => Carbon::parse(request('fecha')),
        ]);

        return redirect()->route('admin.announcements.show', $announcement)
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function edit(Announcement $announcement, AnnouncementLink $link)
    {
        return view('admin.announcement_links.edit', compact('link', 'announcement'));
    }

    public function update(AnnouncementLinkCreatedRequest $request, Announcement $announcement, AnnouncementLink $link)
    {
        $link->update([
            'titulo' => request('titulo'),
            'url' => request('url'),
            'fecha' => Carbon::parse(request('fecha')),
        ]);

        return redirect()->route('admin.announcements.show', $announcement)
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(Announcement $announcement, AnnouncementLink $link)
    {
        $link->delete();

        return redirect()->route('admin.announcements.show', $announcement)
            ->with('msg', 'El registro se eliminó correctamente');
    }
}
