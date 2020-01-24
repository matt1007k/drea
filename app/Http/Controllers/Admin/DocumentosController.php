<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentCreatedRequest;
use App\Models\TypeDocument;

class DocumentosController extends Controller
{
    public function index()
    {
        $tipo = request('tipo') ? request('tipo') : 'todos';
        $search = request('search') ? request('search') : '';

        if ($tipo == 'todos') {
            if ($search != '') {
                $documents = Document::with('tipo')
                    ->search($search)->latest()->get();
            } else {
                $documents = Document::with('tipo')->latest()->get();
            }
        } elseif ($tipo != 'todos') {
            if ($search != '') {
                $documents = Document::with('tipo')
                    ->byTipo($tipo)->search($search)->latest()->get();
            } else {
                $documents = Document::with('tipo')->byTipo($tipo)
                    ->latest()->get();
            }
        }
        $tipos = TypeDocument::orderBy('nombre', 'ASC')->get();
        return view(
            'admin.documents.index',
            compact(
                'documents',
                'tipo',
                'tipos',
                'search'
            )
        );
    }

    public function create()
    {
        $document = new Document();
        $tipos = TypeDocument::orderBy('nombre', 'ASC')->get();
        return view('admin.documents.create', compact('document', 'tipos'));
    }

    public function store(DocumentCreatedRequest $request)
    {
        Document::create([
            'titulo' => request('titulo'),
            'descripcion' => request('descripcion'),
            'url' => request('url'),
            'tipo_id' => request('tipo_id'),
        ]);

        return redirect()->route('admin.documents.index')
            ->with('msg', 'Registro completado');
    }
}
