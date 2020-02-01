<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnouncementGroup extends Model
{
    protected $guarded = [];

    public function scopeSearch($query, $search)
    {
        return $query->where('nombre', 'LIKE', "%$search%")
            ->orWhere('anio', 'LIKE', "%$search%");
    }
}
