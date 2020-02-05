<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'avisos';
    protected $guarded = [];
    protected $dates = [
        'fecha'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function pathPage()
    {
        return route('pages.avisos.show', $this->slug);
    }

    public function pathAdmin()
    {
        return route('admin.posts.show', $this->slug);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('titulo', 'LIKE', "%$search%")
            ->orWhere('fecha', 'LIKE', "%$search%");
    }
}
