<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Post extends Model
{
    protected $table = 'avisos';
    protected $guarded = [];
    protected $dates = [
        'fecha',
    ];

    public function getFechaAttribute($date)
    {
        return new Date($date);
    }

    public function getFechaFormatAttribute()
    {
        return $this->fecha->format('d F, Y');
    }

    public function getFechaDiffForHumansAttribute()
    {
        // \Carbon\Carbon::parse($this->fecha)->diffForHumans();
        return $this->fecha->diffForHumans();
    }

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

    public function scopePublished($query)
    {
        return $query->where('publicado', true);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('titulo', 'LIKE', "%$search%")
            ->orWhere('fecha', 'LIKE', "%$search%");
    }

    public function scopeOrderLatestDate($query)
    {
        return $query->orderBy('fecha', 'DESC');
    }
}
