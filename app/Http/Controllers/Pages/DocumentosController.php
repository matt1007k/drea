<?php

namespace App\Http\Controllers\Pages;

use Carbon\Carbon;
use App\Models\Document;
use App\Models\TypeDocument;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DocumentosController extends Controller
{
  public function index()
  {
    $search = request('search') ?? request('search');
    $q = request('q') ?? request('q');
    $d = request('d') ?? request('d');
    $d_format = $d ? Carbon::parse($d)->format('Y-m-d') : '';

    $tipos = TypeDocument::all();
    $documents = Document::byTipo($q)
      ->byDate($d_format)
      ->search($search)->latest()->paginate(10);

    return view('pages.documentos.index', compact(
      'q',
      'd',
      'search',
      'tipos',
      'documents'
    ));
  }
}
