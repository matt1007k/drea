<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Post;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $avisos = Post::orderBy('fecha', 'DESC')->paginate(10);
        $documentos_interes = Document::latest()->limit(2)->byTipo('Documentos de interés')->get();
        $documentos_resoluciones = Document::latest()->limit(2)->byTipo('Resoluciones')->get();
        return view('pages.inicio.index', compact('avisos', 'documentos_interes', 'documentos_resoluciones'));
    }
}
