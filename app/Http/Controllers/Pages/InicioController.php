<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\ExternalLink;
use App\Models\Post;
use App\Models\Slideshow;
use App\Models\TypeDocument;

class InicioController extends Controller
{
    public function index()
    {
        $avisos = Post::orderLatestDate()->published()->paginate(10);
        $anuncios = Ad::latest()->published()->get();
        $tipoDocumentos = TypeDocument::all();
        $slideshows = Slideshow::orderLatestDate()->published()->get();
        $externalLinks = ExternalLink::order('ASC')->published()->get();

        return view('pages.inicio.index', compact(
            'avisos',
            'anuncios',
            'tipoDocumentos',
            'slideshows',
            'externalLinks'
        ));
    }
}
