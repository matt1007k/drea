<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\Submenu;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubmenuCreatedRequest;
use App\Http\Requests\SubmenuUpdatedRequest;

class SubmenusController extends Controller
{
    public function create(Menu $menu)
    {
        $submenu = new Submenu();
        return view('admin.submenus.create', compact('submenu', 'menu'));
    }

    public function store(SubmenuCreatedRequest $request, Menu $menu)
    {
        $menu->submenus()->create([
            'titulo' => request('titulo'),
            'ruta' => request('ruta'),
            'orden' => request('orden'),
            'publicado' => request('publicado') ? true : false,
        ]);

        return redirect()->route('admin.menus.show', $menu)
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function edit(Menu $menu, Submenu $submenu)
    {
        return view('admin.submenus.edit', compact('submenu', 'menu'));
    }

    public function update(SubmenuUpdatedRequest $request, Menu $menu, Submenu $submenu)
    {
        $submenu->update([
            'titulo' => request('titulo'),
            'ruta' => request('ruta'),
            'orden' => request('orden'),
            'publicado' => request('publicado') ? true : false,
        ]);

        return redirect()->route('admin.menus.show', $menu)
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(Menu $menu, Submenu $submenu)
    {
        $submenu->delete();

        return redirect()->route('admin.menus.show', $menu)
            ->with('msg', 'El registro se eliminó correctamente');
    }
}
