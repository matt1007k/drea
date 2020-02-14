<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MenuCreatedRequest;
use App\Models\Menu;

class MenusController extends Controller
{
    public function index()
    {
        $search = request('search') ? request('search') : '';

        if ($search != '') {
            $menus = Menu::search($search)->latest()->get();
        } else {
            $menus = Menu::latest()->get();
        }

        return view(
            'admin.menus.index',
            compact(
                'menus',
                'search'
            )
        );
    }

    public function show(Menu $menu)
    {
        return view('admin.menus.show', compact('menu'));
    }

    public function create()
    {
        $menu = new Menu();
        return view('admin.menus.create', compact('menu'));
    }

    public function store(MenuCreatedRequest $request)
    {
        Menu::create([
            'titulo' => request('titulo'),
            'ruta' => request('ruta'),
            'orden' => request('orden'),
            'publicado' => request('publicado') ? true : false,
        ]);

        return redirect()->route('admin.menus.index')
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function edit(Menu $menu)
    {
        return view('admin.menus.edit', compact('menu'));
    }

    public function update(MenuCreatedRequest $request, Menu $menu)
    {
        $menu->update([
            'titulo' => request('titulo'),
            'ruta' => request('ruta'),
            'orden' => request('orden'),
            'publicado' => request('publicado') ? true : false,
        ]);

        return redirect()->route('admin.menus.index')
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('admin.menus.index')
            ->with('msg', 'El registro se eliminó correctamente');
    }
}
