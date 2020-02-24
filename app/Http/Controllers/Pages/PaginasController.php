<?php

namespace App\Http\Controllers\Pages;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaginasController extends Controller
{
    public function index($tipo)
    {
        $menu = Menu::where('ruta', "/$tipo")->first();
        if ($menu) {
            if ($menu->page != null) {
                $page = $menu->page;
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
