<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Album;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    public function index()
    {
        $album = request('album') ?? request('album');
        $albums = Album::published()->orderBy('titulo', 'ASC')->get();
        if ($album != null) {
            $albumdb = Album::where('slug', $album)->first();
        } else {
            $albumdb = $albums->first();
            $album = $albumdb->slug;
        }
        return view('pages.galeria.index', compact(
            'albums',
            'album',
            'albumdb'
        ));
    }
}
