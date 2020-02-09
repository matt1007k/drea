<?php

namespace App\Http\Controllers\Admin;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\AnnouncementLink;
use App\Http\Controllers\Controller;
use App\Http\Requests\AnnouncementLinkCreatedRequest;
use Carbon\Carbon;

class AnnouncementLinksController extends Controller
{
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
            'fecha' => Carbon::parse(request('fecha'))
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
            'fecha' => Carbon::parse(request('fecha'))
        ]);

        return redirect()->route('admin.announcements.show', $announcement)
            ->with('msg', 'El registro se editó correctamente');
    }
}
