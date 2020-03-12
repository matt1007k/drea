<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DocumentCreatedRequest;
use App\Http\Requests\DocumentUpdatedRequest;
use App\Models\Document;
use App\Models\TypeDocument;
use App\Services\UploadsService;
use Carbon\Carbon;

class DocumentosController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:documentos.lista')->only(['index']);
        $this->middleware('can:documentos.ver')->only(['show']);
        $this->middleware('can:documentos.registrar')->only(['create', 'store']);
        $this->middleware('can:documentos.editar')->only(['edit', 'update']);
        $this->middleware('can:documentos.registrar.resolucion')->only(['resolucionCreate', 'store']);
        $this->middleware('can:documentos.editar.resolucion')->only(['resolucionEdit', 'update']);
        $this->middleware('can:documentos.eliminar')->only(['destroy']);
    }

    public function index()
    {
        if (auth()->user()->hasRole('resolucion')) {
            $documents = Document::with('tipo')->byTipo('resolucion')->latest()->get();
            return view(
                'admin.documents.index',
                compact(
                    'documents'
                )
            );
        } else {
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

    }

    public function show(Document $document)
    {
        return view('admin.documents.show', compact('document'));
    }

    public function resolucionCreate()
    {
        $document = new Document();
        $tipo = TypeDocument::where('nombre', 'Resolución')->first();
        return view('admin.documents.resolucion.create', compact('document', 'tipo'));
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
            'anio' => request('anio'),
            'archivo' => (new UploadsService('archivo', request('anio'), 'documentos'))->getFileCreated(),
            'fecha' => Carbon::parse(request('fecha')),
            'publicado' => request('publicado') ? true : false,
            'tipo_id' => request('tipo_id'),
        ]);

        return redirect()->route('admin.documents.index')
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function resolucionEdit(Document $document)
    {
        $tipo = TypeDocument::where('nombre', 'Resolución')->first();
        return view('admin.documents.resolucion.edit', compact('document', 'tipo'));
    }

    public function edit(Document $document)
    {
        $tipos = TypeDocument::orderBy('nombre', 'ASC')->get();
        return view('admin.documents.edit', compact('document', 'tipos'));
    }

    public function update(Document $document, DocumentUpdatedRequest $request)
    {
        $document->update([
            'titulo' => request('titulo'),
            'descripcion' => request('descripcion'),
            'anio' => request('anio'),
            'archivo' => $document->getArchivoUpdated(),
            'fecha' => Carbon::parse(request('fecha')),
            'publicado' => request('publicado') ? true : false,
            'tipo_id' => request('tipo_id'),
        ]);

        return redirect()->route('admin.documents.index')
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(Document $document)
    {
        $document->deleteDocument();

        return redirect()->route('admin.documents.index')
            ->with('msg', 'El registro se eliminó correctamente');
    }
}
