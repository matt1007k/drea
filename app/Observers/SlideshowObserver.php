<?php

namespace App\Observers;

use App\Models\Slideshow;
use Illuminate\Support\Str;

class SlideshowObserver
{
    public function saving(Slideshow $slideshow)
    {
        $slug = strtolower(Str::slug($slideshow->titulo, '-'));
        if (Slideshow::where('slug', $slug)->exists()) {
            $slug = $slug . '-' . uniqid();
        }

        $slideshow->slug = $slug;
    }
}
