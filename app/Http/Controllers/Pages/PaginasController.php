<?php

namespace App\Http\Controllers\Pages;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaginasController extends Controller
{
    public function index($tipo)
    {
        $page = Menu::where('ruta', "/$tipo")->first();
        // if ($page) {
        //     return view("pages.{$tipo}.index");
        // }
        // if ($tipo == 'admin') {
        //     return redirect()->route('admin.index');
        // }
        // if ($tipo == 'documentos') {
        //     return view('pages.documentos.index');
        // } elseif ($tipo == 'nosotros') {
        //     return view('pages.nosotros.index');
        // }
        // return redirect()->route('pages.inicio');
        // abort(404);
    }
}
