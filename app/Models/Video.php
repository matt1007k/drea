<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded = [];
    protected $dates = ['fecha'];
    protected $appends = ['fecha_format'];

    public function getFechaFormatAttribute()
    {
        return $this->fecha->format('d M yy');
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('titulo', 'LIKE', "%$search%");
    }
}
