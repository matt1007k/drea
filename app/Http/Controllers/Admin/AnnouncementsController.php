<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AnnouncementCreatedRequest;
use App\Models\Announcement;
use App\Models\AnnouncementGroup;
use Carbon\Carbon;

class AnnouncementsController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:convocatorias.lista')->only(['index']);
        $this->middleware('can:convocatorias.ver')->only(['show']);
        $this->middleware('can:convocatorias.registrar')->only(['create', 'store']);
        $this->middleware('can:convocatorias.editar')->only(['edit', 'update']);
        $this->middleware('can:convocatorias.eliminar')->only(['destroy']);
    }

    public function index()
    {
        $grupo = request('grupo') ? request('grupo') : 'todos';
        $search = request('search') ? request('search') : '';

        if ($grupo == 'todos') {
            if ($search != '') {
                $announcements = Announcement::with('grupo')
                    ->search($search)->latest()->get();
            } else {
                $announcements = Announcement::with('grupo')->latest()->get();
            }
        } elseif ($grupo != 'todos') {
            if ($search != '') {
                $announcements = Announcement::with('grupo')
                    ->byGroup($grupo)->search($search)->latest()->get();
            } else {
                $announcements = Announcement::with('grupo')->byGroup($grupo)
                    ->latest()->get();
            }
        }
        $grupos = AnnouncementGroup::orderBy('nombre', 'ASC')->get();
        return view(
            'admin.announcements.index',
            compact(
                'announcements',
                'grupo',
                'grupos',
                'search'
            )
        );
    }

    public function create()
    {
        $grupos = AnnouncementGroup::orderBy('nombre', 'ASC')->get();
        $announcement = new Announcement(['fecha' => now()]);
        return view('admin.announcements.create', compact('announcement', 'grupos'));
    }

    public function store(AnnouncementCreatedRequest $request)
    {
        Announcement::create([
            'titulo' => request('titulo'),
            'numero' => request('numero'),
            'fecha' => Carbon::parse(request('fecha')),
            'estado' => request('estado'),
            'grupo_id' => request('grupo_id'),
        ]);

        return redirect()->route('admin.announcements.index')
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function show(Announcement $announcement)
    {
        return view('admin.announcements.show', compact('announcement'));
    }

    public function edit(Announcement $announcement)
    {
        $grupos = AnnouncementGroup::orderBy('nombre', 'ASC')->get();
        return view('admin.announcements.edit', compact('announcement', 'grupos'));
    }

    public function update(AnnouncementCreatedRequest $request, Announcement $announcement)
    {
        $announcement->update([
            'titulo' => request('titulo'),
            'numero' => request('numero'),
            'fecha' => Carbon::parse(request('fecha')),
            'estado' => request('estado'),
            'grupo_id' => request('grupo_id'),
        ]);

        return redirect()->route('admin.announcements.index')
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(Announcement $announcement)
    {
        $announcement->delete();

        return redirect()->route('admin.announcements.index')
            ->with('msg', 'El registro se eliminó correctamente');
    }
}
