<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PageCreatedRequest;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Submenu;

class SubmenuPagesController extends Controller
{
    public function create(Menu $menu, Submenu $submenu)
    {
        $page = new Page();
        return view('admin.subpages.create', compact('page', 'menu', 'submenu'));
    }

    public function store(Menu $menu, Submenu $submenu, PageCreatedRequest $request)
    {
        $submenu->createPage();

        return redirect()->route('admin.menus.show', $menu)
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function edit(Menu $menu, Submenu $submenu, Page $page)
    {
        return view('admin.subpages.edit', compact('page', 'menu', 'submenu'));
    }

    public function update(PageCreatedRequest $request, Menu $menu, Submenu $submenu, Page $page)
    {
        $submenu->updatePage();
        return redirect()->route('admin.menus.show', $menu)
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(Menu $menu, Submenu $submenu, Page $page)
    {
        $page->delete();
        return redirect()->route('admin.menus.show', $menu)
            ->with('msg', 'El registro se eliminó correctamente');
    }
}
