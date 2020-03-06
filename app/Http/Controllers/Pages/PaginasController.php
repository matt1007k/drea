<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Submenu;

class PaginasController extends Controller
{
    public function index($tipo)
    {
        $menu = Menu::where('ruta', "/$tipo")->first();
        $menu2 = Submenu::where('ruta', "/$tipo")->first();
        if ($menu) {
            if ($menu->page != null) {
                $page = $menu->page;
                return view("pages.index", compact('page'));
            } else {
                return redirect()->route("pages.{$tipo}");
            }
        } elseif ($menu2) {
            if ($menu2->page != null) {
                $page = $menu2->page;
                return view("pages.index", compact('page'));
            } else {
                return redirect()->route("pages.{$tipo}");
            }
        } elseif ($tipo == 'admin') {
            return redirect()->route("{$tipo}.index");
        }

        abort(404);
    }
}
