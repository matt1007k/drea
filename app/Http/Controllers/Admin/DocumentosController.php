<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Http\Controllers\Controller;

class DocumentosController extends Controller
{
    public function index()
    {
        $documents = Document::latest()->get();
        return view('admin.documents.index', compact('documents'));
    }

    public function create()
    {
        $document = new Document();
        return view('admin.documents.create', compact('document'));
    }

    public function store()
    {
        request()->validate([
            'titulo' => 'required|string|max:100',
            'descripcion' => 'required|string|max:300',
            'url' => 'required'
        ]);
        Document::create([
            'titulo' => request('titulo'),
            'descripcion' => request('descripcion'),
            'url' => request('url'),
        ]);

        return redirect()->route('admin.documents.index')
            ->with('msg', 'Registro completado');
    }
}
