<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Str;

class PostObserver
{
    /**
     * Handle the post "created" event.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function saving(Post $post)
    {
        $slug = strtolower(Str::slug($post->titulo, '-'));
        if (Post::where('slug', $slug)->exists())
            $slug = $slug . '-' . uniqid();
        $post->slug = $slug;
    }
}
