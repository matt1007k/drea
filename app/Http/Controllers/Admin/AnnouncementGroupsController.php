<?php

namespace App\Http\Controllers\Admin;

use App\Models\AnnouncementGroup;
use App\Http\Requests\AnnouncementGroupCreatedRequest;

class AnnouncementGroupsController extends Controller
{
    public function index()
    {
        $search = request('search') ? request('search') : '';

        if ($search != '') {
            $announcement_groups = AnnouncementGroup::search($search)->latest()->get();
        } else {
            $announcement_groups = AnnouncementGroup::latest()->get();
        }

        return view(
            'admin.announcement_groups.index',
            compact(
                'announcement_groups',
                'search'
            )
        );
    }

    public function show(AnnouncementGroup $announcement_group)
    {
        return view('admin.announcement_groups.show', compact('announcement_group'));
    }

    public function create()
    {
        $announcement_group = new AnnouncementGroup();
        return view('admin.announcement_groups.create', compact('announcement_group'));
    }

    public function store(AnnouncementGroupCreatedRequest $request)
    {
        AnnouncementGroup::create([
            'nombre' => request('nombre'),
            'introduccion' => request('introduccion'),
            'anio' => request('anio')
        ]);

        return redirect()->route('admin.announcement_groups.index')
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function edit(AnnouncementGroup $announcement_group)
    {
        return view('admin.announcement_groups.edit', compact('announcement_group'));
    }

    public function update(AnnouncementGroupCreatedRequest $request, AnnouncementGroup $announcement_group)
    {
        $announcement_group->update([
            'nombre' => request('nombre'),
            'introduccion' => request('introduccion'),
            'anio' => request('anio')
        ]);

        return redirect()->route('admin.announcement_groups.index')
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(AnnouncementGroup $announcement_group)
    {
        $announcement_group->delete();
        return redirect()->route('admin.announcement_groups.index')
            ->with('msg', 'El registro se eliminó correctamente');
    }
}
