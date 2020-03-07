<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Video extends Model
{
    protected $guarded = [];
    protected $dates = ['fecha'];
    protected $appends = ['fecha_format'];

    public function getFechaAttribute($date)
    {
        return new Date($date);
    }

    public function getFechaFormatAttribute()
    {
        return $this->fecha->format('d F, Y');
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('titulo', 'LIKE', "%$search%");
    }

    public function scopePublished($query)
    {
        return $query->where('publicado', true);
    }
}
