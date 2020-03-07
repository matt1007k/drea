<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Submenu extends Model
{
    protected $guarded = [];

    public function getCreatedAtAttribute($date)
    {
        return new Date($date);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('titulo', 'LIKE', "%$search%");
    }

    public function scopePublished($query)
    {
        return $query->where('publicado', true);
    }

    public function scopeOrder($query, $type)
    {
        return $query->orderBy('orden', $type);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
