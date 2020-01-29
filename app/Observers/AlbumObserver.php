<?php

namespace App\Observers;

use App\Models\Album;
use Illuminate\Support\Str;

class AlbumObserver
{
    public function saving(Album $album)
    {
        $slug = strtolower(Str::slug($album->titulo, '-'));
        if (Album::where('slug', $slug)->exists())
            $slug = $slug . '-' . uniqid();
        $album->slug = $slug;
    }
}
