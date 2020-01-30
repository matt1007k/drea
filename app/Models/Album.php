<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $guarded = [];
    protected $table = 'albumes';

    protected $dates = ['fecha'];
    protected $appends = ['fecha_format'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getFechaFormatAttribute()
    {
        return $this->fecha->format('d M yy');
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('titulo', 'LIKE', "%$search%")
            ->orWhere('descripcion', 'LIKE', "%$search%");
    }

    public function pathPage()
    {
        return url('/albumes/' . $this->slug);
    }

    public function pathAdmin()
    {
        return route('admin.albums.show', $this->slug);
    }
}
