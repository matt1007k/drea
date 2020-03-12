<?php

namespace App\Http\Controllers\Admin;

use App\Models\TypeDocument;

class TypeDocumentsController extends Controller
{
    public function __construct()
    {
        // $this->middleware('can:tipo-documento.lista')->only(['index']);
        // $this->middleware('can:tipo-documento.ver')->only(['show']);
        $this->middleware('can:tipo-documento.registrar')->only(['create', 'store']);
        // $this->middleware('can:tipo-documento.editar')->only(['edit', 'update']);
        // $this->middleware('can:tipo-documento.eliminar')->only(['destroy']);
    }

    public function create()
    {
        $type = new TypeDocument();
        return view('admin.types.create', compact('type'));
    }

    public function store()
    {
        request()->validate([
            'nombre' => 'required|string|max:50',
        ]);
        TypeDocument::create([
            'nombre' => request('nombre'),
        ]);

        return redirect()->route('admin.documents.index')
            ->with('msg', 'El registro se guardó correctamente');
    }
}
