<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::published()->orderBy('titulo', 'ASC')->get();
        return view('pages.videos.index', compact(
            'videos'
        ));
    }
}
